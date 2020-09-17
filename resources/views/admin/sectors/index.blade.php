@extends('admin.layouts.main')

@section('content')
    <div class="container">
        <div class="row mt-1 justify-content-around">
            <h2>Setores</h2>
            <a href="" class="btn btn-success mb-1"><i class="fa  fa-plus" aria-hidden="true"></i></a>
        </div>
        <div class="table-resposive ">
            <table class="table table-striped table-hover table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th width="20%">Col1</th>
                    <th width="40%">Col2</th>
                    <th>Col3</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>

@endsection
