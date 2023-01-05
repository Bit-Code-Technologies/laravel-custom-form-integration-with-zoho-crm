<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Roboto:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <!-- Styles -->


    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .h-100 {
            height: 100% !important;
        }

        .bg-cover {
            background: no-repeat 50%/cover;
        }

        .sidebar {
            background-image: url(pexels-jopwell-2422280.jpg);
            position: fixed;
            top: 0;
            bottom: 0;
        }

        .frm-spcng {
            padding-top: 50px;
            padding-bottom: 200px;
        }

        .frm-spcng img {
            width: 150px;
            height: 70px;
        }

        .pb-4 {
            padding-bottom: 1.5rem !important;
        }

        #crmWebToEntityForm {
            text-align: left;
        }


        @media (min-width: 768px) {
            .px-md-5 {
                padding-right: 3rem;
                padding-left: 3rem !important;
            }
        }

        @media (max-width: 768px) {
            .ms-sm-auto {
                padding: 0 20px;
                margin-left: auto !important;
            }
        }

        .dropdown-toggle {
            height: 40px;
            width: 400px !important;
        }

        /*--snackbar--*/
        #snackbar {
            display: none;
            min-width: 250px;
            margin-left: -125px;
            background-color: #363030;
            color: #fff;
            text-align: center;
            border-radius: 5px;
            margin-right: 10px;
            padding: 13px;
            position: fixed;
            z-index: 20000000000;
            right: 0;
            bottom: 30px;
            font-size: 15px;
        }

        #snackbar.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {
                bottom: 0;
                opaCity: 0;
            }

            to {
                bottom: 30px;
                opaCity: 1;
            }
        }

        @keyframes fadein {
            from {
                bottom: 0;
                opaCity: 0;
            }

            to {
                bottom: 30px;
                opaCity: 1;
            }
        }

        @-webkit-keyframes fadeout {
            from {
                bottom: 30px;
                opaCity: 1;
            }

            to {
                bottom: 0;
                opaCity: 0;
            }
        }

        @keyframes fadeout {
            from {
                bottom: 30px;
                opaCity: 1;
            }

            to {
                bottom: 0;
                opaCity: 0;
            }
        }

        /*--snackbar--*/
    </style>
</head>

<body>
    <div class="therapy-network">
        <nav class="col-md-5 col-lg-5 d-md-block  sidebar collapse h-100 bg-cover" id="sidebarMenu"></nav>

        <main class="col-md-7 ms-sm-auto col-lg-7 px-md-5 frm-spcng">
            <img alt="logo" class="pb-4" src="bit-apps-logo.svg" width="300">
            <div class="row">
                <div class="col-sm-9">
                    <h1 class="pb-3" style="letter-spacing: -0.06rem;">Join Our Network</h1>
                    <p class="pb-3">Please complete the form and a member of our Network Development team will follow
                        up to answer your questions. If you'd like to proceed, we'll initiate the creation of a
                        Participation Agreement as well as start the Credentialing process.</p>
                </div>
            </div>


            <div id="crmWebToEntityForm">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="content-type" content="text/html;charset=UTF-8">
                <form action={{ route('send.data.tocrm') }} name="WebToLeads2250905000027780001" method="POST"
                    accept-charset="UTF-8">
                    @csrf
                    <div class="row mb-3 g-3">
                        <div class="col-sm-12">
                            <label class="form-label" for="Practice_Name">Practice Name</label>
                            <input class="form-control" type="text" id="Practice_Name" name="Practice_Name"
                                maxlength="100" value="{{ old('Practice_Name') }}">
                            @if ($errors->has('Practice_Name'))
                                <span class="text-danger">{{ $errors->first('Practice_Name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3 g-3">
                        <div class="col-md-6 col-sm-12">
                            <label class="form-label" for="Tax_ID">Tax ID Number</label>
                            <input class="form-control" type="tel" id="Tax_ID" name="Tax_ID" maxlength="100"
                                value="{{ old('Tax_ID') }}">
                            @if ($errors->has('Tax_ID'))
                                <span class="text-danger">{{ $errors->first('Tax_ID') }}</span>
                            @endif
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <label class="form-label" for="NPI_Number">NPI Number</label>
                            <input class="form-control" id="NPI_Number" name="NPI_Number" maxlength="100" type="tel"
                                value="{{ old('NPI_Number') }}">
                            @if ($errors->has('NPI_Number'))
                                <span class="text-danger">{{ $errors->first('NPI_Number') }}</span>
                            @endif
                        </div>

                    </div>


                    <div class="row mb-3 g-3">
                        <div class="col-sm-4">
                            <label class="form-label" for="First_Name">First Name</label>
                            <input class="form-control" id="First_Name" maxlength="40" name="First_Name" type="text"
                                value="{{ old('First_Name') }}">
                            @if ($errors->has('First_Name'))
                                <span class="text-danger">{{ $errors->first('First_Name') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="Last_Name">Last Name</label>
                            <input class="form-control" id="Last_Name" maxlength="40" name="Last_Name" type="text"
                                value="{{ old('Last_Name') }}">
                            @if ($errors->has('Last_Name'))
                                <span class="text-danger">{{ $errors->first('Last_Name') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="'Job_Title">Job Title</label>
                            <input class="form-control" id="Job_Title" maxlength="50" name="Job_Title" type="text"
                                value="{{ old('Job_Title') }}">
                            @if ($errors->has('Job_Title'))
                                <span class="text-danger">{{ $errors->first('Job_Title') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3 g-3">
                        <div class="col-sm-4">
                            <label class="form-label" for="Phone">Office Phone</label>
                            <input class="form-control" id="Phone" maxlength="100" name="Phone"
                                type="tel" value="{{ old('Phone') }}">
                            @if ($errors->has('Phone'))
                                <span class="text-danger">{{ $errors->first('Phone') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="Mobile">Mobile</label>
                            <input class="form-control" id="Mobile" maxlength="100" name="Mobile"
                                type="tel" value="{{ old('Mobile') }}">
                            @if ($errors->has('Mobile'))
                                <span class="text-danger">{{ $errors->first('Mobile') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="Fax">Fax</label>
                            <input class="form-control" id="Fax" maxlength="100" name="Fax"
                                type="tel" value="{{ old('Fax') }}">
                            @if ($errors->has('Fax'))
                                <span class="text-danger">{{ $errors->first('Fax') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3 g-3">
                        <div class="col-sm-6">
                            <label class="form-label" for="Email">Email</label>
                            <input class="form-control" ftype="Email" id="Email" maxlength="100"
                                name="Email" type="Email" value="{{ old('Email') }}">
                            @if ($errors->has('Email'))
                                <span class="text-danger">{{ $errors->first('Email') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="Street">Street Address</label>
                            <input class="form-control" id="Street" maxlength="100" name="Street"
                                type="text" value="{{ old('Street') }}">
                            @if ($errors->has('Street'))
                                <span class="text-danger">{{ $errors->first('Street') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3 g-3">
                        <div class="col-sm-4">
                            <label class="form-label" for="City">City</label>
                            <input class="form-control" id="City" maxlength="100" name="City"
                                type="text" value="{{ old('City') }}">
                            @if ($errors->has('City'))
                                <span class="text-danger">{{ $errors->first('City') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="State">State</label>
                            <input class="form-control" id="State" maxlength="100" name="State"
                                type="text" value="{{ old('State') }}">
                            @if ($errors->has('State'))
                                <span class="text-danger">{{ $errors->first('State') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="Zip_Code">Zip Code</label>
                            <input class="form-control" id="Zip_Code" maxlength="100" name="Zip_Code"
                                type="tel" value="{{ old(' ') }}">
                            @if ($errors->has('Zip_Code'))
                                <span class="text-danger">{{ $errors->first('Zip_Code') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3 g-3">
                        <div class="col-sm-6">
                            <label class="form-label" for="Country">Country / Counties</label>
                            <input class="form-control" id="Country" maxlength="200" name="Country"
                                type="text" value="{{ old('Country') }}">
                            @if ($errors->has('Country'))
                                <span class="text-danger">{{ $errors->first('Country') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="Number_of_Locations">Number of Locations</label>
                            <input class="form-control" id="Number_of_Locations" maxlength="100"
                                name="Number_of_Locations" type="number" value="{{ old('Number_of_Locations') }}">
                            @if ($errors->has('Number_of_Locations'))
                                <span class="text-danger">{{ $errors->first('Number_of_Locations') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <p class="mb-1 mt-2">Specialty <span class="text-muted">(select all that apply)</span></p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input zcwf_ckbox" id="ot" value="O_T"
                                    maxlength="3" name="Specialty[]" type="checkbox"
                                    {{ in_array('O_T', old('Specialty', [])) ? 'checked' : '' }}>
                                <label class="form-check-label" for="O_T">OT</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input zcwf_ckbox" id="P_T" value="P_T"
                                    maxlength="3" name="Specialty[]" type="checkbox"
                                    {{ in_array('P_T', old('Specialty', [])) ? 'checked' : '' }}>
                                <label class="form-check-label" for="P_T">PT</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input zcwf_ckbox" id="S_T" value="S_T"
                                    maxlength="3" name="Specialty[]" type="checkbox"
                                    {{ in_array('S_T', old('Specialty', [])) ? 'checked' : '' }}>
                                <label class="form-check-label" for="S_T">ST</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input zcwf_ckbox" id="Chiropractor" value="Chiropractor"
                                    maxlength="3" name="Specialty[]" type="checkbox"
                                    {{ in_array('Chiropractor', old('Specialty', [])) ? 'checked' : '' }}>
                                <label class="form-check-label" for="Chiropractor">Chiropractor</label>
                            </div>
                            <br>
                            @if ($errors->has('Specialty'))
                                <span class="text-danger">{{ $errors->first('Specialty') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="mb-1 mt-4">Line of Business <span class="text-muted">(select all that
                                    apply)</span></p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input zcwf_ckbox" id="medicaid" value="Medicaid"
                                    {{ in_array('Medicaid', old('Line_of_Business', [])) ? 'checked' : '' }}
                                    maxlength="3" name="Line_of_Business[]" type="checkbox">
                                <label class="form-check-label" for="medicaid">Medicaid</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input zcwf_ckbox" id="medicare" value="Medicare"
                                    {{ in_array('Medicare', old('Line_of_Business', [])) ? 'checked' : '' }}
                                    maxlength="3" name="Line_of_Business[]" type="checkbox">
                                <label class="form-check-label" for="medicare">Medicare</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input zcwf_ckbox" id="commercial" value="Commercial"
                                    {{ in_array('Commercial', old('Line_of_Business', [])) ? 'checked' : '' }}
                                    maxlength="3" name="Line_of_Business[]" type="checkbox">
                                <label class="form-check-label" for="commercial">Commercial</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input zcwf_ckbox" id="marketplace" value="Marketplace"
                                    {{ in_array('Marketplace', old('Line_of_Business', [])) ? 'checked' : '' }}
                                    maxlength="3" name="Line_of_Business[]" type="checkbox">
                                <label class="form-check-label" for="marketplace">Marketplace</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input zcwf_ckbox" id="workers_comp" value="Worker_s_Comp"
                                    {{ in_array('Worker_s_Comp', old('Line_of_Business', [])) ? 'checked' : '' }}
                                    maxlength="3" name="Line_of_Business[]" type="checkbox">
                                <label class="form-check-label" for="workers_comp">Worker's Comp</label>
                            </div>
                        </div>
                        @if ($errors->has('Line_of_Business'))
                            <span class="text-danger">{{ $errors->first('Line_of_Business') }}</span>
                        @endif
                    </div>
                    <div class="row gx-4 pb-2 mt-4">
                        <div class="col-sm-12">
                            <label class="form-label" for="Age_Groups_Seen">Age Group Seen</label><br>
                            <select class="selectpicker" multiple title="Choose one of the following..."
                                data-live-search="true" name="Age_Groups_Seen[]">
                                <option value="Pediatric"
                                    {{ in_array('Pediatric', old('Age_Groups_Seen', [])) ? 'selected' : '' }}>Pediatric
                                </option>
                                <option value="Adult"
                                    {{ in_array('Adult', old('Age_Groups_Seen', [])) ? 'selected' : '' }}>
                                    Adult</option>
                            </select>
                        </div>
                        @if ($errors->has('Age_Groups_Seen'))
                            <span class="text-danger">{{ $errors->first('Age_Groups_Seen') }}</span>
                        @endif
                    </div>
                    <div class="row gx-4 pb-2 mt-3">
                        <div class="col-sm-6">
                            <label class="form-label" for="Lead_Source">How did you hear about us?</label>
                            <select aria-label="How did you hear about us?" class="form-select" id="Lead_Source"
                                name="Lead_Source">
                                <option value="">Choose...</option>
                                <option value="TN Website"
                                    @if (old('Lead_Source') == 'TN Website') {{ 'selected' }} @endif>Our Website</option>
                                <option value="Marketing Campaign"
                                    @if (old('Lead_Source') == 'Marketing Campaign') {{ 'selected' }} @endif>Email</option>
                                <option value="Fax Blast Outreach"
                                    @if (old('Lead_Source') == 'Fax Blast Outreach') {{ 'selected' }} @endif>Fax</option>
                                <option value="Web Research"
                                    @if (old('Lead_Source') == 'Web Research') {{ 'selected' }} @endif>Web</option>
                                <option value="Other" @if (old('Lead_Source') == 'Other') {{ 'selected' }} @endif>
                                    Other
                                </option>
                            </select>
                            @if ($errors->has('Lead_Source'))
                                <span class="text-danger">{{ $errors->first('Lead_Source') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="Website">Website </label>
                            <input class="form-control" id="Website" name="Website" type="text"
                                aria-required="true" pattern="https://.*" size="30"
                                value="{{ old('Website') }}">
                            @if ($errors->has('Website'))
                                <span class="text-danger">{{ $errors->first('Website') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row gx-4 pb-2 mt-5">
                        <div class="col-sm-4">
                            <input class="formsubmit zcwf_button w-100 btn btn-primary btn-lg" id="formsubmit"
                                title="Submit" type="submit" value="Submit">
                        </div>
                    </div>
                </form>
                @if (\Session::has('success'))
                    <div id="snackbar">
                        @php
                            $success = Session::get('success');
                            echo $success;
                        @endphp
                    </div>
                @endif

                @if (\Session::has('failed'))
                    <div id="snackbar">
                        @php
                            $failed = Session::get('failed');
                            echo $failed;
                        @endphp
                    </div>
                @endif
            </div>
        </main>

    </div>

</body>


<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.selectpicker').selectpicker();
    });

    $("#snackbar").show();
    setTimeout(function() {
        $("#snackbar").hide();
    }, 5000);
</script>

</html>
