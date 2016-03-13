@extends('layouts.app')

@section('home')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="assets/images/test_profile.png" alt="profile_picture">
                            <div class="caption">
                            <h3>{{ Auth::user()->name }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">

                        <!-- Bootstrap Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#readingLog" aria-controls="readingLog" role="tab" data-toggle="tab">Reading Log</a></li>
                            <li role="presentation"><a href="#bookshelf" aria-controls="bookshelf" role="tab" data-toggle="tab">Bookshelf</a></li>
                            <li role="presentation"><a href="#library" aria-controls="library" role="tab" data-toggle="tab">Library</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="readingLog">...</div>
                        <div role="tabpanel" class="tab-pane" id="bookshelf">...</div>
                        <div role="tabpanel" class="tab-pane" id="library">...</div>
                        </div>
                    </div>
                    </div>

            </div>
        </div>
    </div>
</div>



@endsection

