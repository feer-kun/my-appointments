@extends('layouts.panel')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
                <h6>Gestor de Especialidades</h6>
                <a href="{{ route('specialties.create') }}"><button class="btn btn-primary" type="button">Nueva Especialidad</button></a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center justify-content-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Nombre
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Descripción</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div>
                                            <img src="{{ asset('img/small-logos/logo-spotify.svg') }}"
                                                class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm">Spotify</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">$2,500</p>
                                </td>
                                <td>
                                    <span class="text-xs font-weight-bold">working</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div>
                                            <img src="{{ asset('img/small-logos/logo-invision.svg') }}"
                                                class="avatar avatar-sm rounded-circle me-2" alt="invision">
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm">Invision</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">$5,000</p>
                                </td>
                                <td>
                                    <span class="text-xs font-weight-bold">done</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div>
                                            <img src="{{ asset('img/small-logos/logo-jira.svg') }}"
                                                class="avatar avatar-sm rounded-circle me-2" alt="jira">
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm">Jira</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">$3,400</p>
                                </td>
                                <td>
                                    <span class="text-xs font-weight-bold">canceled</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div>
                                            <img src="{{ asset('img/small-logos/logo-slack.svg') }}"
                                                class="avatar avatar-sm rounded-circle me-2" alt="slack">
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm">Slack</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">$1,000</p>
                                </td>
                                <td>
                                    <span class="text-xs font-weight-bold">canceled</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div>
                                            <img src="{{ asset('img/small-logos/logo-webdev.svg') }}"
                                                class="avatar avatar-sm rounded-circle me-2" alt="webdev">
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm">Webdev</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">$14,000</p>
                                </td>
                                <td>
                                    <span class="text-xs font-weight-bold">working</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div>
                                            <img src="{{ asset('small-logos/logo-xd.svg') }}"
                                                class="avatar avatar-sm rounded-circle me-2" alt="xd">
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm">Adobe XD</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">$2,300</p>
                                </td>
                                <td>
                                    <span class="text-xs font-weight-bold">done</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection