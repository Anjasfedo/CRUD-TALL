@extends('layouts.app')

@section('content')
    <livewire:layouts.breadcrumb header="Category" />


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <livewire:layouts.Table :dataValues="$dataValues" :dataHeaders="$dataHeaders" />
    </div>

    {{-- Create Modal --}}
    <x-modals.form-modal id="createModal" label="Category Create" />

    <x-modals.form-modal id="editModal" label="Category Edit" />

    <x-modals.detail-modal label="Category Detail" />

    <x-modals.delete-modal />
@endsection
