<?php




include "header.php";

?>

        <div class="col-md-12 col-sm-6 col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading"><center>CUSTOMER DETAILS</center></div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form method="post" action="../php/addcustomercontroller.php"  class="form-horizontal">
                            <div class="form-body">
                                <h2 class="box-title">Tell Us Something About Yourself !</h2>
                                <hr class="m-t-0 m-b-40">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <label class="control-label col-md-3">First Name</label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name"> <span class="help-block"></span>
                                                    <div class="input-group-addon"><i class="ti-user"></i></div>
                                                </div>
                                                </div>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Last Name</label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name"> <span class="help-block"></span>
                                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Email</label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email"> <span class="help-block"></span>
                                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                                </div>
                                                </div>
                                        </div>

                                        </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Mobile</label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile"> <span class="help-block"></span>
                                                    <div class="input-group-addon"><i class="ti-mobile"></i></div>
                                            </div>
                                                </div>
                                    </div>

                                        </div>
                                    </div>

                                        <div class="col-md-12 col-sm-6 col-xs-12 ">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" class="form-control has-feedback-left " id="address" placeholder="Address" >
                                            </div>

                                        </div>


                                    <!--<div class="col-md-12 col-sm-6 col-xs-12 col-lg-12 form-group has-feedback">
                                        <div class="form-group">
                                        <label class="control-label col-md-1">Address</label>
                                            <div class="col-md-11 col-sm-9 col-xs-12">
                                        <input type="text" name="address" class="form-control has-feedback-left " id="address" placeholder="Address" >
                                                <span class="help-block"></span></div>-->
                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                        <label>Select your City</label>
                                            <select name="city" class="form-control" required="true" id="city">
                                                <option disabled="true" selected="true">Select Your City</option>
                                                <option>Others</option>
                                                <option> Agastinuagan  </option>
                                                <option>  Anandpur  </option>
                                                <option>  Anjira  </option>
                                                <option>  Anugul (Angul)  </option>
                                                <option>  Anugul (Angul)  </option>
                                                <option>  Arjyapalli  </option>
                                                <option>  Asika </option>
                                                <option>  Athagad </option>
                                                <option>  Athmallik </option>
                                                <option>  Badagada  </option>
                                                <option>  Badakodanda </option>
                                                <option>  Badamba (Nizigarh)  </option>
                                                <option>  Badmal  </option>
                                                <option>  Balagoda (Bolani) </option>
                                                <option>  Balangir  </option>
                                                <option>  Balangir  </option>
                                                <option>  Baleshwar (Balasore)  </option>
                                                <option>  Baleshwar (Balasore)  </option>
                                                <option>  Baliguda  </option>
                                                <option>  Balimela  </option>
                                                <option>  Balipatapur </option>
                                                <option>  Balugaon  </option>
                                                <option>  Banaigarh </option>
                                                <option>  Banapur </option>
                                                <option>  Bandhbahal  </option>
                                                <option>  Bangomunda  </option>
                                                <option>  Banki </option>
                                                <option>  Barapali  </option>
                                                <option>  Barbil  </option>
                                                <option>  Bardol  </option>
                                                <option>  Bargarh </option>
                                                <option>  Bargarh </option>
                                                <option>  Baripada  </option>
                                                <option>  Basudebpur  </option>
                                                <option>  Baudh (Boudh) </option>
                                                <option>  Baudhgarh (Boudh) </option>
                                                <option>  Belagachhia </option>
                                                <option>  Bellaguntha (Belaguntha)  </option>
                                                <option>  Belpahar  </option>
                                                <option>  Bhabinipur  </option>
                                                <option>  Bhadrak </option>
                                                <option>  Bhadrak </option>
                                                <option>  Bhakarsahi  </option>
                                                <option>  Bhanjanagar </option>
                                                <option>  Bhapur  </option>
                                                <option>  Bhatli  </option>
                                                <option>  Bhawanipatna  </option>
                                                <option>  Bhuban  </option>
                                                <option>  Bhubaneswar </option>
                                                <option>  Bijepur </option>
                                                <option>  Binika  </option>
                                                <option>  Biramitrapur  </option>
                                                <option>  Birapratappur </option>
                                                <option>  Bishamakatak (Bissam Cuttack) </option>
                                                <option>  Borigam </option>
                                                <option>  Boriguma (Borigumma)  </option>
                                                <option>  Brahmabarada  </option>
                                                <option>  Brahmapur (Berhampur) </option>
                                                <option>  Brajarajnagar </option>
                                                <option>  Budhapanka  </option>
                                                <option>  Buguda  </option>
                                                <option>  Bundia  </option>
                                                <option>  Burla </option>
                                                <option>  Byasanagar  </option>
                                                <option>  Champua </option>
                                                <option>  Chandapur </option>
                                                <option>  Chandili  </option>
                                                <option>  Charibatia  </option>
                                                <option>  Chhatrapur  </option>
                                                <option>  Chikiti </option>
                                                <option>  Chitrakonda </option>
                                                <option>  Choudwar  </option>
                                                <option>  Cuttack </option>
                                                <option>  Cuttack </option>
                                                <option>  Dadhapatna  </option>
                                                <option>  Daitari </option>
                                                <option>  Damanjodi </option>
                                                <option>  Danara  </option>
                                                <option>  Daringbadi  </option>
                                                <option>  Debagarh  </option>
                                                <option>  Debagarh  </option>
                                                <option>  Dera Colliery Township  </option>
                                                <option>  Dhamanagar  </option>
                                                <option>  Dhenkanal </option>
                                                <option>  Dhenkanal </option>
                                                <option>  Digapahandi </option>
                                                <option>  Dungamal  </option>
                                                <option>  Erei  </option>
                                                <option>  Fertilizer Corporation of India Township (F.C.I. Township)  </option>
                                                <option>  G. Udayagiri  </option>
                                                <option>  Gajapati  </option>
                                                <option>  Ganjam  </option>
                                                <option>  Ganjam  </option>
                                                <option>  Ghantapada  </option>
                                                <option>  Godiputamatiapara </option>
                                                <option>  Golabandha  </option>
                                                <option>  Gopalpur  </option>
                                                <option>  Gotamara  </option>
                                                <option>  Gudari  </option>
                                                <option>  Gunupur </option>
                                                <option>  Hatibandha  </option>
                                                <option>  Hinjilicut  </option>
                                                <option>  Hirakud </option>
                                                <option>  Indipur </option>
                                                <option>  Itamati </option>
                                                <option>  Jagatsinghapur  </option>
                                                <option>  Jagatsinghapur(Jagatsinghpur) </option>
                                                <option>  Jajanga </option>
                                                <option>  Jajapur </option>
                                                <option>  Jajapur (Jajpur)  </option>
                                                <option>  Jalda </option>
                                                <option>  Jaleshwar (Jaleswar)  </option>
                                                <option>  Jashipur  </option>
                                                <option>  Jatani  </option>
                                                <option>  Jeypur (Jeypore)  </option>
                                                <option>  Jharsuguda  </option>
                                                <option>  Jharsuguda  </option>
                                                <option>  Jhumpura  </option>
                                                <option>  Joda  </option>
                                                <option>  Jorada (Bada) </option>
                                                <option>  Junagarh  </option>
                                                <option>  Kabatabandha  </option>
                                                <option>  Kabisurjyanagar(Kabisuryanagar) </option>
                                                <option>  Kaipadar  </option>
                                                <option>  Kalahandi </option>
                                                <option>  Kalarangiata  </option>
                                                <option>  Kaliapani </option>
                                                <option>  Kalyanasingpur  </option>
                                                <option>  Kamakshyanagar  </option>
                                                <option>  Kandasar  </option>
                                                <option>  Kandhamal </option>
                                                <option>  Kanheipur </option>
                                                <option>  Kantabanji (Kantabanjhi)  </option>
                                                <option>  Kantilo </option>
                                                <option>  Karanjia  </option>
                                                <option>  Kashinagar  </option>
                                                <option>  Kendrapara  </option>
                                                <option>  Kendrapara  </option>
                                                <option>  Kendujhar </option>
                                                <option>  Kendujhar </option>
                                                <option>  Kesinga </option>
                                                <option>  Khaliapali  </option>
                                                <option>  Khalikote (Khallikote)  </option>
                                                <option>  Khandapada  </option>
                                                <option>  Khariar </option>
                                                <option>  Khariar Road  </option>
                                                <option>  Khatiguda </option>
                                                <option>  Khordha </option>
                                                <option>  Khordha </option>
                                                <option>  Kochinda (Kuchinda) </option>
                                                <option>  Kodala  </option>
                                                <option>  Koida </option>
                                                <option>  Konark  </option>
                                                <option>  Koraput </option>
                                                <option>  Koraput </option>
                                                <option>  Kotpad  </option>
                                                <option>  Krushnanandapur </option>
                                                <option>  Kuanrmunda  </option>
                                                <option>  Kukudakhandi  </option>
                                                <option>  Kulad </option>
                                                <option>  Kullada </option>
                                                <option>  Kunjabangarh  </option>
                                                <option>  Kurumuli  </option>
                                                <option>  Lalsingi  </option>
                                                <option>  Lathikata </option>
                                                <option>  Lochapada </option>
                                                <option>  Loisinga  </option>
                                                <option>  Madanpur Rampur </option>
                                                <option>  Majhihara </option>
                                                <option>  Makundapur  </option>
                                                <option>  Malkangiri  </option>
                                                <option>  Malkangiri  </option>
                                                <option>  Mayurbhanj  </option>
                                                <option>  Mohana  </option>
                                                <option>  Mukhiguda </option>
                                                <option>  Mundamarai  </option>
                                                <option>  Nabarangapur (Nabarangpur)  </option>
                                                <option>  Nabarangapur(Nabarangpur) </option>
                                                <option>  Nalco </option>
                                                <option>  Nayagarh  </option>
                                                <option>  Nayagarh  </option>
                                                <option>  Nilagiri  </option>
                                                <option>  Nimapada  </option>
                                                <option>  Nuahata </option>
                                                <option>  Nuapada </option>
                                                <option>  Nuapatna  </option>
                                                <option>  O.C.L. Industrial Township  </option>
                                                <option>  Odagaon </option>
                                                <option>  Padmapur  </option>
                                                <option>  Palalahada  </option>
                                                <option>  Palurgada </option>
                                                <option>  Panposh </option>
                                                <option>  Papadahandi </option>
                                                <option>  Paradip </option>
                                                <option>  Paradipgarh </option>
                                                <option>  Paralakhemundi  </option>
                                                <option>  Pathar  </option>
                                                <option>  Patnagarh </option>
                                                <option>  Patrapur  </option>
                                                <option>  Pattamundai </option>
                                                <option>  Phulabani (Phulbani)  </option>
                                                <option>  Pipili  </option>
                                                <option>  Pitala  </option>
                                                <option>  Polasara  </option>
                                                <option>  Pratapsasan </option>
                                                <option>  Puri  </option>
                                                <option>  Puri  </option>
                                                <option>  Purusottampur </option>
                                                <option>  R. Udayagiri  </option>
                                                <option>  Raighar </option>
                                                <option>  Rairangpur  </option>
                                                <option>  Rajagangapur(Rajgangpur)  </option>
                                                <option>  Rajasunakhala </option>
                                                <option>  Rambha  </option>
                                                <option>  Ramgarh </option>
                                                <option>  Ranapurgada </option>
                                                <option>  Raurkela (Rourkela) </option>
                                                <option>  Raurkela Industrial Township  </option>
                                                <option>  Rayagada  </option>
                                                <option>  Rayagada  </option>
                                                <option>  Rayagada  </option>
                                                <option>  Redhakhol (Rairakhol) </option>
                                                <option>  Remuna  </option>
                                                <option>  Rengali </option>
                                                <option>  Rengali Dam Project Township  </option>
                                                <option>  Sambalpur </option>
                                                <option>  Sambalpur </option>
                                                <option>  Saranga </option>
                                                <option>  Sayadpur  </option>
                                                <option>  Sheragada </option>
                                                <option>  Sohela  </option>
                                                <option>  Sonapur (Sonepur) </option>
                                                <option>  Soro  </option>
                                                <option>  Subalaya  </option>
                                                <option>  Subarnapur  </option>
                                                <option>  Sunabeda  </option>
                                                <option>  Sundargarh (Sundergarh) </option>
                                                <option>  Sundargarh (Sundergarh) </option>
                                                <option>  Surada  </option>
                                                <option>  Surala  </option>
                                                <option>  Suvani  </option>
                                                <option>  Talcher </option>
                                                <option>  Talcher Thermal Power Station Township (T.T.P.S. Township)  </option>
                                                <option>  Tangi </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <h2 class="box-title">Tell Us About Your Usage !</h2>
                                <hr class="m-t-0 m-b-40">


                                <div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 5px;">
                                    <div id="type" class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-success" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                            <input type="radio" name="type" value="Domestic" required="true"> &nbsp; Domestic &nbsp;
                                        </label>
                                        <label class="btn btn-success" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                            <input type="radio" name="type" value="Commercial"> Commercial
                                        </label>
                                        <label class="btn btn-success" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                            <input type="radio" name="type" value="Industrial"> &nbsp; Industrial &nbsp;
                                        </label>
                                    </div>
                                </div>


                                <div class="col-md-6 col-sm-6 col-xs-12" >
                                    <div id="phase" class="btn-group" data-toggle="buttons" style="margin-bottom: 35px;">
                                        <label class="btn btn-success" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                            <input type="radio" name="phase" value="one"> &nbsp; Single Phase &nbsp;
                                        </label>
                                        <label class="btn btn-success" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                            <input type="radio" name="phase" value="three"> Three Phase
                                        </label>
                                    </div>
                                </div>


                              <!--  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback"  >
                                    <input type="text" name="units" class="form-control has-feedback-right has-feedback-left" id="units" placeholder="Units">
                                    <span class="form-control-feedback right" aria-hidden="true" style="color:darkgrey">kWh</span>
                                    <span class="form-control-feedback left fa fa-lightbulb-o" aria-hidden="true" style="color:lightgreen"></span>
                                </div>


                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" name="monthlybill" class="form-control has-feedback-left has-feedback-right " id="monthlybill" placeholder="Monthly Bill">
                                    <span class="fa fa-file-text form-control-feedback left" aria-hidden="true" style="color:lightgreen"></span>
                                    <span class=" form-control-feedback right" aria-hidden="true" style="color:darkgrey">INR</span>
                                </div>
                                <br>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" name="contractload" class="form-control has-feedback-left has-feedback-right" id="contractload" placeholder="Contract Load">
                                    <span class="fa fa-bolt form-control-feedback left" aria-hidden="true" style="color:lightgreen"></span>
                                    <span class="form-control-feedback right" aria-hidden="true" style="color:darkgrey">kW</span>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" name="roofarea" class="form-control has-feedback-left has-feedback-right " id="roofarea" placeholder="Roof Area">
                                    <span class="fa fa-arrows form-control-feedback left" aria-hidden="true" style="color:lightgreen"></span>
                                    <span class=" form-control-feedback right" aria-hidden="true" style="color:darkgrey">sq.ft</span>
                                </div>-->
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <div class="form-group">
                                        <label class="control-label col-md-1">Units</label>
                                        <div class="col-md-9">
                                            <input type="text" name="units" class="form-control has-feedback-left has-feedback-right " id="units" placeholder="Units"> </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Monthly Bill</label>
                                        <div class="col-md-9">
                                            <input type="text" name="monthlybill" class="form-control has-feedback-left has-feedback-right " id="monthlybill" placeholder="Monthly Bill"></div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <div class="form-group">
                                        <label class="control-label col-md-1">Contract Load</label>
                                        <div class="col-md-9">
                                            <input type="text" name="contractload" class="form-control has-feedback-left has-feedback-right" id="contractload" placeholder="Contract Load"> </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Roof Area</label>
                                        <div class="col-md-9">
                                            <input type="text" name="roofarea" class="form-control has-feedback-left has-feedback-right " id="roofarea" placeholder="Roof Area"></div>

                                    </div>
                                </div>
                            </div>




                                <center>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                <button type="button" class="btn btn-default">Cancel</button>
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success" id="senddata">Submit</button>
                                    </div>
                                </div>
                                </center>

                            </div>

                        </form>
                            </div>
                                    </div>


        </div>

    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="../js/alertify.js"></script>
    <link rel="stylesheet" href="../css/alertify.core.css" />
    <link rel="stylesheet" href="../css/alertify.bootstrap.css" />

<?php


include "footer.php";


?>