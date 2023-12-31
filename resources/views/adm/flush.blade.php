@extends('adm.main.admin')

@section('content')
@php
$page =4;
@endphp
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Flush files</h4>
                        <p class="category">This page are the storage manager, it helps the site performance in a higher level.</p>
                    </div>
                    <div class="content all-icons">
                        <div class="row">
                          

                          </div>
                          <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                            <div class="font-icon-detail"><a href="{{route('flusher',['q'=>'1'])}}" onclick="showLoading()"><button>Flush files</button></a>
                             <div>
                                @if(Session('flush'))
                                <span>{{Session('flush')}}</span>
                                @endif
                             </div>
                            </div>

                          </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection