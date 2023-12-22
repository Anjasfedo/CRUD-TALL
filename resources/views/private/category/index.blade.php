@extends('layouts.app')

@section('content')
    <livewire:layouts.breadcrumb header="Category" />
    <div x-data="{ openCreateModal: false }">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <livewire:layouts.Table :dataValues="$dataValues" :dataHeaders="$dataHeaders" />
    </div>
    <livewire:actions.action-category />
    </div>
@endsection
