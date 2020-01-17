@extends('layouts.inceptive_registration.registration_selection')

@section('content')
<div class="col-sm-6 col-sm-offset-3">
                            <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Registration Selection Type</h3>
                            </div>
                            
                            
                            <form action="" method="post">
                                
                                <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Register As</label>
                                        <select name="firm_type" id="firm_type" class="form-control">
                                            
                                        </select>
                                    </div>
                                    </div>

                                </div>
                                </div>
                                <div class="panel-footer text-right">
                                <button class="btn btn-success" type="submit">Submit</button>
                                </div>
                            </form>
                             
                             
                            
                            </div>
                        </div>
@endsection