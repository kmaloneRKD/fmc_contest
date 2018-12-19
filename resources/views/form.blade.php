@extends('layouts.master')

@section('title', 'FMC Contest Entry Page')

@section('content')
<form id="contestForm">
    <div class="row">
        <div class="col col-12 mx-auto">
            <div class="formGrid">
                <div class="form__left">
                    <div class="leftSec sec1">
                        <img src="{{ asset('/images/logos/form_logo.png') }}">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <img class="fixPepper" src="{{ asset('/images/logos/fmcPeppers2.png') }}">
                    </div>    
                    <div class="leftSec sec2">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>    
                    <div class="leftSec sec3">
                        <img src="{{ asset('/images/logos/fmcPeppers2.png') }}">
                    </div>    
                </div>
                
                <div class="form__right">
                    <div class="form-group formMarg">
                        <label>First Name</label>
                        <input name="firstname" class="form-control" type="text" required>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group formMarg">
                        <label>Last Name</label>
                        <input class="form-control" type="text" name="lastname" required>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group formMarg">
                        <label>Farm Name</label>
                        <input class="form-control" type="text" name="farmname" required>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group formMarg">
                        <label>Email Address</label>
                        <input class="form-control" type="text" name="email" required>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group formMarg">
                        <label>Phone</label>
                        <input class="form-control" type="number" name="phone" required>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group formMarg">
                        <label>Address</label>
                        <input class="form-control" type="text" name="address" required>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group formMarg">
                        <label>City/Town</label>
                        <input class="form-control" type="text" name="city" required>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group formMarg">
                        <label>Province</label>
                        <input class="form-control" type="text" name="province" required>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group formMarg">
                        <label>Retailer</label>
                        <input class="form-control" type="text" name="retailer">
                        <div class="clearfix"></div>
                    </div>

                    <div class="cropBlock">
                        <div class="form-group form-control--margfix">
                            <label>&nbsp;</label>
                            <label class="crop--input label--fix" type="text">Crop</label>
                            <label class="acres--input label--fix">Acres</label>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label>1</label>
                            <input class="form-control crop--input" type="text" name="crop1">
                            <input class="form-control acres--input" type="text" name="acres1">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label>2</label>
                            <input class="form-control crop--input" type="text" name="crop2">
                            <input class="form-control acres--input" type="text" name="acres2">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label>3</label>
                            <input class="form-control crop--input" type="text" name="crop3">
                            <input class="form-control acres--input" type="text" name="acres3">
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="checkboxes">
                        <label class="label--fix">Do you use an add-in with your glyphosate?</label>
                       <div class="lengend-action-buttons lengend-action-buttons-first">
                        <label for="d3_graph_chart0011day">
                            <input type="radio" name="addin" id="d3_graph_chart0011day" value="yes">
                            <span>Yes</span>
                        </label>
                        </div>

                        <div class="lengend-action-buttons lengend-action-buttons-first">
                        <label for="d3_graph_chart0017day">
                            <input type="radio" name="addin" id="d3_graph_chart0017day" value="no" checked="checked">
                            <span>No</span>
                        </label>
                        </div>
                    </div>

                    <div class="chem_dropdown">
                        <p>Click the box below to select which add-ins you use:</p>
                        <select class="js-example-basic-multiple" name="chems[]" multiple="multiple">
                            <option value="Authority">Authority</option>
                            <option value="Authority Supreme">Authority Supreme</option>
                            <option value="Avadex">Avadex</option>
                            <option value="Command">Command</option>
                            <option value="Edge">Edge</option>
                            <option value="Fierce">Fierce</option>
                            <option value="Focus">Focus</option>
                            <option value="Olympus">Olympus</option>
                            <option value="Valtera">Valtera</option>
                            <option value="Zidua">Zidua</option>
                            <option value="Fortress">Fortress</option>
                            <option value="Aim EC">Aim EC</option>
                            <option value="Blackhawk">Blackhawk</option>
                            <option value="Heat">Heat</option>
                            <option value="Inferno Duo">Inferno Duo</option>
                            <option value="Korrex">Korrex</option>
                            <option value="Paradigm">Paradigm</option>
                            <option value="Express SG">Express SG</option>
                            <option value="Express PRO">Express PRO</option>
                            <option value="Express FX">Express FX</option>
                        </select>
                    </div>

                    <div class="form-group skill-question">
                        <label>To win a prize, you must correctly answer the following skill testing question without mechanical or other assistance: </label>
                        <p>2 x 9 - 4 + 6 =</p> <input class="form-control" type="number" name="skilltest" required>
                        <div class="clearfix"></div>
                    </div>

                    <div class="form-group checkbox">
                        <input class="check" type="checkbox" name="terms" required>
                        <label>Yes, I agree to the <a href="#">Terms and Conditions</a> and understand the Privacy Policy:</label>
                            <div class="clearfix"></div>
                    </div>

                    <div class="form-group checkbox">
                        <input class="check" type="checkbox" name="sms">
                        <label>Yes, I confirm that I would like to receive electronic messages offered by FMC of Canada Ltd. and its affiliates regarding products, services and other information that is useful to my business.</label>
                        <div class="clearfix"></div>
                    </div>

                    <div class="form-group buttonbox">
                        <button class="btn btn-success" id="entryBtn" type="submit">Submit Entry</button>
                    </div>

                    <div class="form-group notice">
                        <label>Contest open to commercial farmers in Western Canada.</label>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@stop

@section('background')
    <div class="whiteBackground"></div>   
@stop
 