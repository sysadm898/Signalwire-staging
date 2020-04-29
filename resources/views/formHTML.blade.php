@extends('layouts.app')

@section('content')

    <div class="content-wrapper">
        <div class="content-heading">
            Settings
            <small data-localize="dashboard.WELCOME"> Update API Credentials and General Settings</small>
        </div>
        <!-- START widgets box-->
        <div class="row">
            <div class="col-lg-12">
                <!-- START panel-->
                <div class="panel panel-default">
                    <div class="panel-heading">Form elements</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="get" action="/">
                            <fieldset>
                                <legend>Classic inputs</legend>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Rounded Corners</label>
                                    <div class="col-sm-10">
                                        <input class="form-control form-control-rounded" type="text">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">With help</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text">
                                        <span class="help-block m-b-none">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="input-id-1">Label focus</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="input-id-1" type="text">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="password" name="password">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Placeholder</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="placeholder">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Disabled</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" placeholder="Disabled input here..." disabled="">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Static control</label>
                                    <div class="col-lg-10">
                                        <p class="form-control-static">email@example.com</p>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Checkboxes and radios</label>
                                    <div class="col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">Option one is this and that—be sure to include why it's great</label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input id="optionsRadios1" type="radio" name="optionsRadios" value="option1" checked="">Option one is this and that—be sure to include why it's great</label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input id="optionsRadios2" type="radio" name="optionsRadios" value="option2">Option two can be something else and selecting it will deselect option one</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Inline checkboxes</label>
                                    <div class="col-sm-10">
                                        <label class="checkbox checkbox-inline">
                                            <input id="inlineCheckbox1" type="checkbox" value="option1">a</label>
                                        <label class="checkbox-inline">
                                            <input id="inlineCheckbox2" type="checkbox" value="option2">b</label>
                                        <label class="checkbox-inline">
                                            <input id="inlineCheckbox3" type="checkbox" value="option3">c</label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="last-child">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Select</label>
                                    <div class="col-sm-10">
                                        <select class="form-control m-b" name="account">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                        </select>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <select class="form-control" multiple="">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Input variants</legend>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Custom Checkboxes &amp; radios</label>
                                    <div class="col-sm-10">
                                        <div class="checkbox c-checkbox needsclick">
                                            <label class="needsclick">
                                                <input class="needsclick" type="checkbox" value="">
                                                <span class="fa fa-check"></span>Option one</label>
                                        </div>
                                        <div class="checkbox c-checkbox">
                                            <label>
                                                <input type="checkbox" checked="" value="">
                                                <span class="fa fa-check"></span>Option two checked</label>
                                        </div>
                                        <div class="checkbox c-checkbox">
                                            <label>
                                                <input type="checkbox" checked="" disabled="" value="">
                                                <span class="fa fa-check"></span>Option three checked and disabled</label>
                                        </div>
                                        <div class="checkbox c-checkbox">
                                            <label>
                                                <input type="checkbox" disabled="" value="">
                                                <span class="fa fa-check"></span>Option four disabled</label>
                                        </div>
                                        <div class="radio c-radio">
                                            <label>
                                                <input type="radio" name="a" value="option1">
                                                <span class="fa fa-circle"></span>Option one</label>
                                        </div>
                                        <div class="radio c-radio">
                                            <label>
                                                <input type="radio" name="a" value="option2" checked="">
                                                <span class="fa fa-circle"></span>Option two checked</label>
                                        </div>
                                        <div class="radio c-radio">
                                            <label>
                                                <input type="radio" value="option2" checked="" disabled="">
                                                <span class="fa fa-circle"></span>Option three checked and disabled</label>
                                        </div>
                                        <div class="radio c-radio">
                                            <label>
                                                <input type="radio" name="a" disabled="">
                                                <span class="fa fa-circle"></span>Option four disabled</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Inline checkboxes</label>
                                    <div class="col-sm-10">
                                        <label class="checkbox-inline c-checkbox">
                                            <input id="inlineCheckbox10" type="checkbox" value="option1">
                                            <span class="fa fa-check"></span>a</label>
                                        <label class="checkbox-inline c-checkbox">
                                            <input id="inlineCheckbox20" type="checkbox" value="option2">
                                            <span class="fa fa-check"></span>b</label>
                                        <label class="checkbox-inline c-checkbox">
                                            <input id="inlineCheckbox30" type="checkbox" value="option3">
                                            <span class="fa fa-check"></span>c</label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Rounded</label>
                                    <div class="col-sm-10">
                                        <label class="checkbox c-checkbox c-checkbox-rounded">
                                            <input id="roundedcheckbox10" type="checkbox" checked>
                                            <span class="fa fa-check"></span>Lorem</label>
                                        <label class="checkbox c-checkbox c-checkbox-rounded">
                                            <input id="roundedcheckbox20" type="checkbox">
                                            <span class="fa fa-check"></span>Ipsum</label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Inline radios</label>
                                    <div class="col-sm-10">
                                        <label class="radio-inline c-radio">
                                            <input id="inlineradio1" type="radio" name="i-radio" value="option1" checked>
                                            <span class="fa fa-circle"></span>a</label>
                                        <label class="radio-inline c-radio">
                                            <input id="inlineradio2" type="radio" name="i-radio" value="option2">
                                            <span class="fa fa-circle"></span>b</label>
                                        <label class="radio-inline c-radio">
                                            <input id="inlineradio3" type="radio" name="i-radio" value="option3">
                                            <span class="fa fa-circle"></span>c</label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Custom icons</label>
                                    <div class="col-sm-10">
                                        <label class="radio-inline c-radio">
                                            <input id="inlineradio10" type="radio" name="i-radio" value="option1" checked>
                                            <span class="fa fa-check"></span>a</label>
                                        <label class="radio-inline c-radio">
                                            <input id="inlineradio20" type="radio" name="i-radio" value="option2" checked>
                                            <span class="fa fa-user"></span>b</label>
                                        <label class="radio-inline c-radio">
                                            <input id="inlineradio30" type="radio" name="i-radio" value="option3" checked>
                                            <span class="fa fa-tint"></span>c</label>
                                        <br>
                                        <label class="checkbox-inline c-checkbox">
                                            <input id="inlinecheckbox10" type="checkbox" value="option1" checked>
                                            <span class="fa fa-star"></span>a</label>
                                        <label class="checkbox-inline c-checkbox">
                                            <input id="inlinecheckbox20" type="checkbox" value="option2" checked>
                                            <span class="fa fa-heart"></span>b</label>
                                        <label class="checkbox-inline c-checkbox">
                                            <input id="inlinecheckbox30" type="checkbox" value="option3" checked>
                                            <span class="fa fa-bell"></span>c</label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group has-success">
                                    <label class="col-sm-2 control-label">Input with success</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group has-warning">
                                    <label class="col-sm-2 control-label">Input with warning</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group has-error">
                                    <label class="col-sm-2 control-label">Input with error</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Control sizing</label>
                                    <div class="col-sm-10">
                                        <input class="form-control input-lg m-b" type="text" placeholder=".input-lg">
                                        <br>
                                        <input class="form-control m-b" type="text" placeholder="Default input">
                                        <br>
                                        <input class="form-control input-sm" type="text" placeholder=".input-sm">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Column sizing</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <input class="form-control" type="text" placeholder=".col-md-2">
                                            </div>
                                            <div class="col-md-3">
                                                <input class="form-control" type="text" placeholder=".col-md-3">
                                            </div>
                                            <div class="col-md-4">
                                                <input class="form-control" type="text" placeholder=".col-md-4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Input groups</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b">
                                            <span class="input-group-addon">@</span>
                                            <input class="form-control" type="text" placeholder="Username">
                                        </div>
                                        <br>
                                        <div class="input-group m-b">
                                            <input class="form-control" type="text">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <br>
                                        <div class="input-group m-b">
                                            <span class="input-group-addon">$</span>
                                            <input class="form-control" type="text">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <br>
                                        <div class="input-group m-b">
                                 <span class="input-group-addon">
                                    <input type="checkbox">
                                 </span>
                                            <input class="form-control" type="text">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                 <span class="input-group-addon">
                                    <input type="radio">
                                 </span>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Button addons</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b">
                                 <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Go!</button>
                                 </span>
                                            <input class="form-control" type="text">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <input class="form-control" type="text">
                                            <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Go!</button>
                                 </span>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">With dropdowns</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b">
                                            <div class="input-group-btn">
                                                <button class="btn btn-default" type="button" data-toggle="dropdown">Action
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" id="ddinput1">
                                                    <li><a href="#">Action</a>
                                                    </li>
                                                    <li><a href="#">Another action</a>
                                                    </li>
                                                    <li><a href="#">Something else here</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <input class="form-control" type="text">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <input class="form-control" type="text">
                                            <div class="input-group-btn">
                                                <button class="btn btn-default" type="button" data-toggle="dropdown">Action
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu pull-right" id="ddinput2">
                                                    <li><a href="#">Action</a>
                                                    </li>
                                                    <li><a href="#">Another action</a>
                                                    </li>
                                                    <li><a href="#">Something else here</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Segmented</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b">
                                            <div class="input-group-btn">
                                                <button class="btn btn-default" type="button" tabindex="-1">Action</button>
                                                <button class="btn btn-default" type="button" data-toggle="dropdown">
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" id="ddinput3">
                                                    <li><a href="#">Action</a>
                                                    </li>
                                                    <li><a href="#">Another action</a>
                                                    </li>
                                                    <li><a href="#">Something else here</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <input class="form-control" type="text">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <input class="form-control" type="text">
                                            <div class="input-group-btn">
                                                <button class="btn btn-default" type="button" tabindex="-1">Action</button>
                                                <button class="btn btn-default" type="button" data-toggle="dropdown">
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu pull-right" id="ddinput4">
                                                    <li><a href="#">Action</a>
                                                    </li>
                                                    <li><a href="#">Another action</a>
                                                    </li>
                                                    <li><a href="#">Something else here</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection