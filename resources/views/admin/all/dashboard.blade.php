@extends('admin.body')

@section('body')
<div class="page-heading">
    <div class="buttons">

    </div>

    <div class="title">
        Dashboard

    </div>
</div>

<div class="dashboard">
    <div class="container-fluid">
        <div class="cards row mt-20">
            <div class="col-sm-3">
                <div class="card green">
                    <h3>144</h3>
                    <h5>Utilisateurs</h5>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card red">
                    <h3>50</h3>
                    <h5>Studios</h5>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card warning">
                    <h3>25</h3>
                    <h5>Appartements</h5>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card dark">
                    <h3>200</h3>
                    <h5>Abonnements</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
