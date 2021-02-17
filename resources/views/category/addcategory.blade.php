<!-- extend the default layout  -->
@extends('layout')

@section('title','ADD CATEGORY')

@section('top_panel')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
            <!-- content @s -->

                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="components-preview wide-md mx-auto">

                                <div class="nk-block nk-block-lg">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="title nk-block-title">ADD CATEGORY</h4>

                                        </div>
                                    </div>
                                    <div class="row g-gs">
                                        <div class="col-lg-6">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <form action="#">
                                                        <div class="form-group">
                                                            <label class="form-label" for="full-name">Parent Name</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="full-name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label" for="email-address">Name</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="email-address">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- .nk-block -->

                            </div><!-- .components-preview -->
                        </div>
                    </div>

            <!-- content @e -->
@endsection

@section('footer')
    @parent
@endsection