<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Mail\ContactMail;
use App\Mail\VehicleBooking;
use App\Model\Appointment;
use App\Model\Booking;
use App\Model\Contact;
use App\Model\Inquiry;
use App\Model\Proposal;
use App\Model\TripBooking;
use App\Models\Membership\MembershipModel;
use App\Models\Settings\CountryModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banners\BannerModel;
use App\Models\MultipleBanners\MultipleBannerModel;
use App\Models\Posts\PostModel;
use App\Models\Posts\AssociatedPostModel;
use App\Models\Posts\PostCategoryModel;
use App\Models\Posts\PostImageModel;
use App\Models\Posts\PostDocModel;
use App\Models\Settings\SettingModel;
use App\Models\Galleries\ImageGalleryModel;
use App\Models\Galleries\ImageGalleryCategoryModel;
use App\Models\Galleries\VideoGalleryModel;
use Mail;
use App\Mail\SendMail;
use App\Mail\SendMailContact;
use App\Mail\SendResume;
use App\Mail\CareerApply;
use App\Models\Posts\PostTypeModel;
use App\Models\Portfolios\PortfolioCategoryModel;
use App\Models\Portfolios\PortfolioModel;
use App\Models\Portfolios\AssociatedPortfolioModel;
use App\Models\RightShare\RightshareCompanyModel;
use App\Models\RightShare\RightshareEligibilityModel;
use App\Models\RightShare\RightshareHolderlistModel;
use App\Models\Taxliability\TaxliabilityCompanyModel;
use App\Models\Taxliability\TaxliabilityEligibilityModel;
use App\Models\Taxliability\TaxliabilityHolderlistModel;
use Illuminate\Support\Str;

class FrontpageController extends Controller
{

    public function index(Request $request)
    {
        $banner = BannerModel::where('status', 1)->get();
        $resource = PostModel::where('post_type', 19)->where('post_parent', '!=', 0)->where('show_in_home', "1")->take(4)->get();
        $service = PostModel::where('post_type', 3)->where('post_parent', '!=', 0)->where('show_in_home', "1")->take(6)->get();
        $about = PostModel::where('id', 119)->first();
        $content = PostModel::where('post_type', 1)->where('post_parent', '=', 0)->where('show_in_home', "1")->take(6)->get();

        $media = PostModel::where('post_type', 5)->where('post_parent', '!=', 0)->where('show_in_home', "1")->take(3)->get();
        $uri = PostTypeModel::where('id', 5)->first();
        return view('themes.default.frontpage', compact('content','uri', 'media', 'about', 'banner', 'resource', 'service'));

    }

    public function posttype(Request $request, $uri)
    {
        if (!check_posttype_uri($uri)) {
            abort(404);
        }
        $data = PostTypeModel::where('uri', $uri)->first();
        $tmpl['template'] = 'single';
        if ($tmpl['template']) {
            $data['template'] = $data['template'];
        }
        if ($data) {
            $posts = PostModel::where('post_type', $data->id)->orderBy('id', 'desc')->get();
        }
        $country = CountryModel::all();
        $related = AssociatedPostModel::where('post_id', 114)->get();
        $category = PostCategoryModel::where('post_type', 26)->get();
//      $associated_posts = AssociatedPostModel::where('post_id', $posts->first()->id)->get();
//      dd($associated_posts);
        if ($request->ajax()) {
            if ($request->has('value')) {
                $result = PostModel::where('post_category', $request->value)->get();
            }

            return view('themes.default.doctor-filter', compact('result'));
        }

        $documents = PostDocModel::where('post_id', $data['id'])->orderBy('ordering', 'desc')->get();
        return view('themes.default.' . $data['template'] . '', compact('category', 'data', 'documents', 'posts', 'country', 'related'));
    }

    public function pagedetail($uri)
    {
        if (!check_uri($uri)) {
            abort(404);
        }
        $data = PostModel::where('uri', $uri)->orWhere('page_key', $uri)->first();
        $tmpl['template'] = 'single';
        if ($tmpl['template']) {
            $data['template'] = $data['template'];
        }

        if ($data->id) {
            $data->visiter = $data->visiter + 1;
            $data->save();
        }

        $rightsharecompany = RightshareCompanyModel::where('status', 1)->get();
        $taxliabilitycompany = TaxliabilityCompanyModel::where('status', 1)->get();
        $data_child = PostModel::where('post_parent', $data['id'])->orderBy('post_order', 'asc')->paginate(3);
        $associated_posts = AssociatedPostModel::where('post_id', $data['id'])->get();
        $documents = PostDocModel::where('post_id', $data['id'])->orderBy('ordering', 'desc')->get();

        return view('themes.default.' . $data['template'] . '', compact('data', 'data_child', 'associated_posts', 'documents', 'rightsharecompany', 'taxliabilitycompany'));
    }

    public function pagedetail_child($parenturi, $uri)
    {
        $data = PostModel::where('uri', $uri)->orWhere('page_key', $uri)->first();

        $tmpl['template'] = 'single';
        if ($tmpl['template']) {
            $data['template'] = $data['template'];
        }

        if ($data->id) {
            $data->visiter = $data->visiter + 1;
            $data->save();
        }

        $data_child = PostModel::where('id', $data['post_parent'])->first();
        if ($data_child) {

            $data['template'] = $data_child['template_child'];
        }
        $associated_posts = array();
        if ($data) {
            $associated_posts = AssociatedPostModel::where('post_id', $data['id'])->get();
        }
        $post_id = $data->id;
        $documents = PostDocModel::where('post_id', $data['id'])->orderBy('ordering', 'desc')->get();
        $related = PostModel::where('post_parent', $data['post_parent'])->get();
        $pos_type = PostTypeModel::where('id', $data->post_type)->first();


        return view('themes.default.' . $data['template'] . '', compact('pos_type', 'related', 'data', 'data_child', 'associated_posts', 'documents'));
    }

    public function portfolio($uri)
    {
        $data = PortfolioModel::where('uri', $uri)->first();
        $associated_post = AssociatedPortfolioModel::where('portfolio_id', $data['id'])->get();
        $trades = PortfolioModel::inRandomOrder()->limit(2)->get();
        if ($data) {
            return view('themes.default.trade', compact('data', 'associated_post', 'trades'));
        }
        return false;
    }

    public function servicetype($category_uri)
    {
        $category = PostCategoryModel::where('uri', $category_uri)->first();
        if ($category) {
            $data = PostModel::where('post_category', $category->id)->orderBy('post_order', 'desc')->get();
            return view('themes.default.service-list', compact('data', 'category'));
        }
        return false;
    }

    public function apply($parenturi, $uri)
    {
        $data = PostModel::where('uri', $uri)->orWhere('page_key', $uri)->first();
        if ($data) {
            return view('themes.default.apply', compact('data'));
        }
    }

    public function navigation($uri)
    {
        $getId = PostModel::where(['uri' => $uri])->first();
        $childCount = PostModel::where(['post_parent' => $getId->id])->count();
        if ($childCount > 0) {
            $parent_post = PostModel::where('uri', $uri)->first();
            $post = PostModel::where(['post_parent' => intval($getId->id)])->orderBy('post_order', 'asc')->paginate(15);
            $template = $parent_post->template;
        } else {
            $parent_post = PostModel::where('uri', $uri)->first();
            $post = PostModel::where('uri', $uri)->first();
            $template = $post->template;
            $news_updates = PostModel::where(['post_type' => 9])->orderBy('post_order', 'asc')->paginate(15);
        }
        $bod = PostModel::where(['post_type' => 12])->get();
        return view('themes.default.' . $template . '', compact('post', 'bod', 'parent_post', 'news_updates'));
    }

    public function category_navigation($uri)
    {
        $post_category = PostCategoryModel::where('uri', trim($uri))->first();
        if ($post_category->id == 2) {
            $data = PostModel::where(['post_category' => $post_category->id])->orderBy('post_order', 'asc')->paginate(15);
            return view('themes.default.completed', compact('data', 'post_category'));
        } else {
            $data = PostModel::where(['post_category' => $post_category->id])->orderBy('post_order', 'asc')->paginate(15);
            return view('themes.default.ongoing', compact('data', 'post_category'));
        }

    }

    /***********************************
     ******** Root Navigation ***********
     ************************************/

    public function photo_gallery($cat_id)
    {
        $data = ImageGalleryModel::where(['category_id' => $cat_id])->get();
        $cat = ImageGalleryCategoryModel::where(['id' => $cat_id])->first();
        return view('themes.default.photo_gallery_thumbnail', compact('data', 'cat'));
    }

    public function sendmail()
    {
        $data = SettingModel::where('id', 1)->first();
        Mail::to($data->email_primary)->send(new SendMail());
        return redirect()->back()->with('message', 'Contact message successfully sent.');
    }

    public function sendmail_contact(Request $request)
    {
        $return = $this->getCaptcha($request['g_recaptcha_response']);
        $data = SettingModel::where('id', 1)->first();
        $data->num_of_inquiries = $data->num_of_inquiries + 1;
        $data->save();
        if ($return->success == true && $return->score > 0.5) {
            Mail::to($data->email_primary)->send(new SendMailContact());
            return redirect()->back()->with('message', 'Contact message successfully sent.');
        } else {
            return redirect()->back()->with('message', 'Please, try again!');
        }
    }

    private function getCaptcha($Secretkey)
    {
        $secret = env('SECRET_KEY');
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$Secretkey}");
        $return = json_decode($response);
        return $return;
    }

    public function career_navigation(Request $request)
    {
        $data['career_title'] = $request->input('post_title');
        return view('themes.default.apply', $data);
    }

    public function career_apply()
    {
        $data['career_title'] = request()->segment(3);
        return view('themes.default.apply', $data);
    }

    public function career_apply_action()
    {
        $data = SettingModel::where('id', 1)->first();
        Mail::to($data->email_primary)->send(new CareerApply());
        return redirect()->back()->with('message', 'Successfully Applied.');
    }

    public function postby_category($id)
    {
        $post_category = PostCategoryModel::where(['id' => $id])->first();
        $data = PostModel::where(['post_category' => $id])->paginate(20);
        if ($data) {
            return view('themes.default.postbycategory', compact('data', 'post_category'));
        }
        return false;
    }

    public function postby_parent($id)
    {
        $childCount = PostModel::where(['post_parent' => $id])->count();
        if ($childCount > 0) {
            $parent_post = PostModel::where('post_parent', $id)->first();
            $post = PostModel::where(['post_parent' => intval($id)])->orderBy('post_order', 'asc')->paginate(15);
            return view('themes.default.template-project-list', compact('post', 'parent_post'));
        }
        return false;
    }

    public function serviceorder($uri)
    {
        $data = PostModel::where('page_key', $uri)->first();
        if ($data) {
            $services = PostModel::where('post_category', $data->post_category)->get();
            $category = PostCategoryModel::where('id', $data->post_category)->first();
            return view('themes.default.order-form', compact('data', 'services', 'category'));
        }
        return false;
    }

    public function sendorder(Request $request)
    {
        $return = $this->getCaptcha($request['g-recaptcha-response']);
        $data = SettingModel::where('id', 1)->first();
        if ($return->success == true && $return->score > 0.5) {
            Mail::to($data->email_primary)->send(new SendMail());
            return redirect()->back()->with('message', 'Order sent successfully.');
        } else {
            return redirect()->back()->with('message', 'Please, try again!');
        }
    }

    public function careerapply($uri)
    {
        $data = PostModel::where('page_key', $uri)->first();
        if ($data) {
            $services = PostModel::where('post_category', $data->post_category)->get();
            $category = PostCategoryModel::where('id', $data->post_category)->first();
            return view('themes.default.career-form', compact('data', 'services', 'category'));
        }
        return false;
    }

    public function sendresume(Request $request)
    {
        $return = $this->getCaptcha($request['g-recaptcha-response']);
        $data = SettingModel::where('id', 1)->first();
        if ($return->success == true && $return->score > 0.5) {
            Mail::to($data->email_primary)->send(new SendResume());
            return redirect()->back()->with('message', 'Resume sent successfully.');
        } else {
            return redirect()->back()->with('message', 'Please, try again!');
        }
    }

    public function rightshare(Request $request)
    {
        // $req = $request->all();
        $company = $request->company;
        $boid = $request->boid;
        $shn = $request->holder_number;
        if (!empty($company) && !empty($boid) && empty($shn)) {
            $data = RightshareEligibilityModel::where(['company' => $company, 'boid' => $boid])->get();
            $data2 = NULL;
            return view('themes.default.rightshare_result', compact('data', 'data2'));
        }
        if (!empty($company) && !empty($shn) && empty($boid)) {
            $data = NULL;
            $data2 = RightshareHolderlistModel::where(['company' => $company, 'shholderno' => $shn])->get();

            return view('themes.default.rightshare_result', compact('data2', 'data'));
        }
        if (!empty($company) && !empty($shn) && !empty($boid)) {
            return redirect()->back()->with('message', 'Input Value Doesnot Match');
        }
        if (empty($shn) && empty($boid)) {
            return redirect()->back()->with('error', 'Input Value Empty');
        }
    }

    public function taxliability(Request $request)
    {
        // $req = $request->all();
        $company = $request->company;
        $boid = $request->boid;
        $shn = $request->holder_number;
        if (!empty($company) && !empty($boid) && empty($shn)) {
            $data = TaxliabilityEligibilityModel::where(['company' => $company, 'boid' => $boid])->get();
            $data2 = NULL;
            return view('themes.default.taxliability_result', compact('data', 'data2'));
        }
        if (!empty($company) && !empty($shn) && empty($boid)) {
            $data = NULL;
            $data2 = TaxliabilityHolderlistModel::where(['company' => $company, 'shholderno' => $shn])->get();

            return view('themes.default.taxliability_result', compact('data2', 'data'));
        }
        if (!empty($company) && !empty($shn) && !empty($boid)) {
            return redirect()->back()->with('message', 'Input Value Doesnot Match');
        }
        if (empty($shn) && empty($boid)) {
            return redirect()->back()->with('error', 'Input Value Empty');
        }
    }

    public function post_inquiry(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'location' => 'required',
                'date' => 'required',
                'contact' => 'required'
            ]);
            $data = $request->all();
            $result = Inquiry::create($data);
            if ($result) {
//              return new \App\Mail\Inquiry($request->email);
//              Mail::send(new \App\Mail\Inquiry($request->email));
                return redirect()->back()->with('message', 'Inquiry message sent successfully.');
            }
        }
    }

    public function random_tripbooking(Request $request)
    {
        if ($request->isMethod('post')) {
//          $request->validate([
//              'first_name'=>'required',
//              'last_name'=>'required',
//              'email'=>'required',
//              'phone'=>'required',
//          ]);
            $data['first_name'] = $request->firstname;
            $data['last_name'] = $request->lastname;
            $data['email'] = $request->email;
            $data['phone'] = $request->phone;
            $data['message'] = $request->message;
            $data['type'] = $request->uri;
            $create = TripBooking::create($data);
            if ($create) {
//              return new \App\Mail\TripBooking($request->email);
//              Mail::send(new \App\Mail\TripBooking($request->email));
                return back()->with('message', 'Trip Booking Completed');
            }

        }
    }


    public function vehicle_booking(Request $request)
    {
        if ($request->isMethod('post')) {
            $data['first_name'] = $request->firstname;
            $data['last_name'] = $request->lastname;
            $data['email'] = $request->email;
            $data['phone'] = $request->phone;
            $data['message'] = $request->message;
            $data['type'] = $request->uri;
            $create = Booking::create($data);
            if ($create) {
//             return new VehicleBooking($request->email);
//             Mail::send(new VehicleBooking($request->email));
                return back()->with('message', 'Vehicle Booking Completed');
            }
        }
    }


    public function proposal_request(Request $request)
    {
        if ($request->isMethod('get')) {
            $data = $request->uri;
            $industry = PostModel::where('status', 1)->where('post_type', 15)->get();
            $country = CountryModel::all();
            return view('themes.default.proposal', compact('data', 'industry', 'country'));
        }
        if ($request->isMethod('post')) {
            if ($request->isMethod('post')) {
                $request->validate([
                    'firstname' => 'required',
                    'lastname' => 'required',
                    'email' => 'required',
                    'contact' => 'required',
                ]);
                $data['first_name'] = $request->firstname;
                $data['last_name'] = $request->lastname;
                $data['email'] = $request->email;
                $data['contact'] = $request->contact;
                $data['position'] = $request->position;
                $data['company'] = $request->company;
                $data['country'] = $request->country;
                $data['post_code'] = $request->postcode;
                $data['industry'] = $request->industry;
                $data['revenue'] = $request->revenue;
                $data['options'] = $request->option;
                $data['comments'] = $request->comment;
                if ($request->hasFile('rfp')) {
                    $image = $request->file('rfp');
                    $name = time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/images/rfp/');
                    $image->move($destinationPath, $name);
                    $data['rfp'] = $name;
                }
                $result = Proposal::create($data);
                $setting = SettingModel::first();
                if ($result) {


//              return new \App\Mail\Inquiry($setting->email_primary);
//              Mail::send(new \App\Mail\Inquiry($request->email));
                    return redirect()->back()->with('message', 'Proposal sent successfully.');
                }
            }
        }
    }

    public function search_results(Request $request)
    {
        $query = $request->search;
        if ($query == null) {
            return back()->with('message', 'Search field is empty');
        }
        $result = explode(' ', $query);
        $doctors = PostModel::where('post_type', 26)->where(function ($query) use ($result) {
            foreach ($result as $search) {
                $query->where('cl_posts.post_title', 'like', '%' . $search . '%');
            }
        })->get();
        $category = PostCategoryModel::where('post_type', 26)->get();

        return view('themes.default.search_results', compact('doctors', 'category'));
    }

    public function appointment(Request $request)
    {
        if ($request->isMethod('get')) {
            $uri = $request->uri;
            if (!$uri) {
                $doctor = PostModel::where('post_type', 26)->get();
                $category = PostCategoryModel::where('post_type', 26)->get();

                return view('themes.default.appointment', compact('doctor', 'category'));

            } else {
                $find = PostModel::where('uri', $uri)->first();
                $cat = PostCategoryModel::where('id', $find->post_category)->first();
                return view('themes.default.single-appointment', compact('find', 'cat'));

            }


        }
        if ($request->isMethod('post')) {
            $request->validate([
                'full_name' => 'required',
                'contact' => 'required'
            ]);

            $create = Appointment::create($request->all());

            if ($create) {

                return back()->with('message', 'Appointment booked successfully');
            }
        }
    }

    public function members()
    {
        $data = MembershipModel::get();
        return response()->json($data);
    }


}
