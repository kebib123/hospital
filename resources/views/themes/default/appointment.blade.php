@extends('themes.default.common.master')
@section('content')<!-- banner -->
<section class="bg-primary uk-background-norepeat uk-background-top-right uk-background-image@s
   uk-position-relative uk-flex uk-flex-middle uk-text-center"
         uk-height-viewport="expand: true; min-height: 200;">
    <div class="uk-width-1-1 uk-position-z-index">
        <div class="uk-container text-white"
             uk-scrollspy="cls: uk-animation-slide-top-small; target:h2;  delay: 100; repeat: false;">
            <h2 class="f-30 f-w-600  uk-margin-small">Request an Appointment</h2>
        </div>
    </div>
</section>
<!-- end banner -->

<!-- section -->
<section class="uk-section bg-light">
    <div class="uk-container">
        <div class="bg-white uk-box-shadow-medium uk-border-rounded uk-overflow-hidden">
            <form method="post" action="{{route('appointment')}}">
            @csrf
                <!--  -->
                <div class="f-20 f-w-600 text-white uk-border-bottom uk-form-header bg-primary">
                    Patient Details
                </div>
                <div class="uk-padding">
                    <div class="uk-grid" uk-grid>
                        <!--  -->
                        <div class="uk-width-1-3@m">
                            <label>Patient Name <span class="text-red">*</span></label>
                            <input type="text" class="uk-input" name="full_name">
                        </div>
                        <!--  -->
                        <!--  -->
                        <div class="uk-width-1-3@m">
                            <label>Address <span class="text-red">*</span></label>
                            <input type="text" class="uk-input" name="address">
                        </div>
                        <!--  -->

                        <!--  -->
                        <div class="uk-width-1-3@m">
                            <label>Phone Number <span class="text-red">*</span></label>
                            <input type="text" class="uk-input" name="contact">
                        </div>
                        <!--  -->


                        <!--  -->
                        <div class="uk-width-1-3@m">
                            <label>Your Email Address <span class="text-red">*</span></label>
                            <input type="text" class="uk-input" name="email">
                        </div>
                        <!--  -->
                        <!--  -->
                        <div class="uk-width-1-3@m">
                            <label>Gender <span class="text-red">*</span></label>
                            <select name="gender" class="uk-select">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <!--  -->

                        <!--  -->
                        <div class="uk-width-1-3@m">
                            <label>DOB <span class="text-red">*</span></label>
                            <div class="uk-grid-small" uk-grid>
                                <!--  -->
                                <div class="uk-width-1-3@m">
                                    <select class="uk-select" name="day">
                                        <option value="">Day</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                    </select>
                                </div>
                                <!--  -->

                                <!--  -->
                                <div class="uk-width-1-3@m">
                                    <select class="uk-select" name="month">
                                        <option value="">Month</option>

                                        <option value="1">1</option>

                                        <option value="2">2</option>

                                        <option value="3">3</option>

                                        <option value="4">4</option>

                                        <option value="5">5</option>

                                        <option value="6">6</option>

                                        <option value="7">7</option>

                                        <option value="8">8</option>

                                        <option value="9">9</option>

                                        <option value="10">10</option>

                                        <option value="11">11</option>

                                        <option value="12">12</option>
                                    </select>
                                </div>
                                <!--  -->

                                <!--  -->
                                <div class="uk-width-1-3@m">
                                    <select class="uk-select" name="year">

                                        <option value="">Year</option>
                                        <option value="1921">1921</option>
                                        <option value="1922">1922</option>
                                        <option value="1923">1923</option>
                                        <option value="1924">1924</option>
                                        <option value="1925">1925</option>
                                        <option value="1926">1926</option>
                                        <option value="1927">1927</option>
                                        <option value="1928">1928</option>
                                        <option value="1929">1929</option>
                                        <option value="1930">1930</option>
                                        <option value="1931">1931</option>
                                        <option value="1932">1932</option>
                                        <option value="1933">1933</option>
                                        <option value="1934">1934</option>
                                        <option value="1935">1935</option>
                                        <option value="1936">1936</option>
                                        <option value="1937">1937</option>
                                        <option value="1938">1938</option>
                                        <option value="1939">1939</option>
                                        <option value="1940">1940</option>
                                        <option value="1941">1941</option>
                                        <option value="1942">1942</option>
                                        <option value="1943">1943</option>
                                        <option value="1944">1944</option>
                                        <option value="1945">1945</option>
                                        <option value="1946">1946</option>
                                        <option value="1947">1947</option>
                                        <option value="1948">1948</option>
                                        <option value="1949">1949</option>
                                        <option value="1950">1950</option>
                                        <option value="1951">1951</option>
                                        <option value="1952">1952</option>
                                        <option value="1953">1953</option>
                                        <option value="1954">1954</option>
                                        <option value="1955">1955</option>
                                        <option value="1956">1956</option>
                                        <option value="1957">1957</option>
                                        <option value="1958">1958</option>
                                        <option value="1959">1959</option>
                                        <option value="1960">1960</option>
                                        <option value="1961">1961</option>
                                        <option value="1962">1962</option>
                                        <option value="1963">1963</option>
                                        <option value="1964">1964</option>
                                        <option value="1965">1965</option>
                                        <option value="1966">1966</option>
                                        <option value="1967">1967</option>
                                        <option value="1968">1968</option>
                                        <option value="1969">1969</option>
                                        <option value="1970">1970</option>
                                        <option value="1971">1971</option>
                                        <option value="1972">1972</option>
                                        <option value="1973">1973</option>
                                        <option value="1974">1974</option>
                                        <option value="1975">1975</option>
                                        <option value="1976">1976</option>
                                        <option value="1977">1977</option>
                                        <option value="1978">1978</option>
                                        <option value="1979">1979</option>
                                        <option value="1980">1980</option>
                                        <option value="1981">1981</option>
                                        <option value="1982">1982</option>
                                        <option value="1983">1983</option>
                                        <option value="1984">1984</option>
                                        <option value="1985">1985</option>
                                        <option value="1986">1986</option>
                                        <option value="1987">1987</option>
                                        <option value="1988">1988</option>
                                        <option value="1989">1989</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                    </select>
                                </div>
                                <!--  -->

                            </div>
                        </div>
                        <!--  -->
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="f-20 f-w-600 text-white uk-border-bottom uk-form-header bg-primary">
                    Schedule Information
                </div>
                <div class="uk-padding">
                    <div class="uk-grid" uk-grid>
                        <!--  -->
                        <div class="uk-width-1-3@m">
                            <label>Select Department <span class="text-red">*</span></label>
                            <select class="uk-select" id="department" name="department">
                                <option selected disabled>Choose Department</option>
                                @foreach($category as $value)
                                    <option value="{{$value->id}}">{{$value->category}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--  -->
                        <!--  -->
                        <div class="uk-width-1-3@m">
                            <label>Select Doctor <span class="text-red">*</span></label>
                            <select class="uk-select" id="doctor" name="doctor">
                                <option disabled selected>Choose Doctor</option>
                                @foreach($doctor as $value)
                                    <option d-slug="{{$value->post_title}}"
                                            value="{{$value->id}}">{{$value->post_title}}</option>
                                @endforeach

                            </select>
                        </div>
                        <!--  -->

                        <!--  -->
                        <div class="uk-width-1-3@m">
                            <label>Appointment Date <span class="text-red">*</span></label>
                            <input type="date" class="uk-input" name="appoint_date">
                        </div>
                        <!--  -->


                        <!--  -->
                        <div class="uk-width-1-3@m">
                            <label>Preferred Time <span class="text-red">*</span></label>
                            <select name="time" class="uk-select">
                                <option value="10-12 pm">10 am to 12 pm</option>
                                <option value="12-2 pm">12 pm to 2 pm</option>
                                <option value="2-4 pm">2 pm to 4 pm</option>
                                <option value="4-6 pm">4 pm to 6 pm</option>
                                <option value="6-8 pm">6 pm to 8 pm</option>
                            </select>
                        </div>
                        <!--  -->

                    </div>
                </div>
                <!--  -->

                <div class="f-20 f-w-600 uk-border-bottom uk-padding bg-light">
                    <button class="uk-button uk-button-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- end section -->

<script src="https://cdn.zinggrid.com/zinggrid.min.js" type="text/javascript"></script>
@stop
