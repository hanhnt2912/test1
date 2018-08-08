@extends('admin.layout.master')
@section('main-content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title float-left">Danh sách home</h5>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">tên</th>
                    <th scope="col" >ảnh</th>
                    <th scope="col" >giá bán </th>
                    <th scope="col" >thông tin chung</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $item)
                    <tr>
                        <th scope="row">{{$item-> id}}</th>
                        <td>
                            <div class="card" style="background-image: url('{{$item-> image}}'); -o-background-size: cover; width: 77px"></div>
                        </td>
                        <td>{{$item-> name}}</td>
                        <td></td>
                        <td>{{$item-> price}}</td>
                        <td>{{$item-> general_information}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row">
                {{$list-> links()}}
            </div>
        </div>
    </div>
