@extends('adm.main.admin')

@section('content')
@php
    $page = 5;
@endphp
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-plain">
                    <div class="header">
                        <h4 class="title">Table on Plain Background</h4>
                        <div class="col-md-3">
                            <div class="form-group">
                            
                                <input type="search" class="form-control" id="search" placeholder="Search name here...">
                            </div>
                        </div>
                    </div>
                    <div class="content table-responsive table-full-width">
                       <div class="scroller">
                        <table class="table table-hover">
                            <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Birthdate</th>
                                <th>Actions</th>
                            </thead>
                            <tbody id="tbody">
                               
                            </tbody>
                        </table>
                       </div>
                        <div align="center">
                            @if (Session('success'))
                            <span>{{Session('success')}}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<script>
    function showDatas(){
        var xml = new XMLHttpRequest();
        var search = document.getElementById('search').value;
        xml.onload = function(){
            document.getElementById('tbody').innerHTML = this.responseText;
        }
        xml.open("GET","/admin/searchtbl?q="+search);
        xml.send();
    }
    showDatas();
    document.getElementById('search').onkeyup = function(){
        showDatas();
    }
</script>
<style>
   .scroller{
    max-height: 500px;
    overflow-y: scroll;
    overflow-x: hidden;
   }
   
   .scroller::-webkit-scrollbar {
  width: 12px; 
}
   .scroller::-webkit-scrollbar-track {
  background:#e4e2e2;
  border-radius:5px;

}

.scroller::-webkit-scrollbar-thumb {
  background-color:#e770ff; 
  border-radius: 6px;
}

.scroller::-webkit-scrollbar-thumb:hover {
  background-color: red; 
}


@media (max-width:700px){
    .scroller{
        overflow-x: scroll;
    }
    

    .scroller::-webkit-scrollbar {
  width: 5px; 
  height: 5px;
}
   .scroller::-webkit-scrollbar-track {
  background:#e4e2e2;
  border-radius:5px;

}

.scroller::-webkit-scrollbar-thumb {
  background-color:#e770ff; 
  border-radius: 6px;
}

.scroller::-webkit-scrollbar-thumb:hover {
  background-color: red; 
}
   }
   
</style>


@endsection