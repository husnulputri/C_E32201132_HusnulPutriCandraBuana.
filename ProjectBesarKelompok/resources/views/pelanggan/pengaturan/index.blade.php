@extends('layouts.pelanggan')

@section('title', 'Profil')


@section('nama_pelanggan', $pelanggan['nama_pelanggan'])
@section('email_pelanggan', $pelanggan['email_pelanggan'])

@section('content')
                    <a href="{{URL('pelanggan/pengaturan/'.$pelanggan['id_pelanggan'].'/edit')}}" class="btn-primary btn">Edit Profil</a>

                        <div class="row">
                            <!-- Column -->
                            <div class="col-lg-12">
                                <div class="card" style="background: #f5f5f5">
                                    <div class="card-body">
                                        <div class="card-two">

                                            <h3>{{$pelanggan['nama_pelanggan']}}</h3>
                                            <div class="desc">
                                                {{$pelanggan['email_pelanggan']}} - {{$pelanggan['username_pelanggan']}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection
