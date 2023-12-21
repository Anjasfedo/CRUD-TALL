@extends('layouts.app')

@section('content')
<livewire:layouts.breadcrumb header="Dashboard" />

    <div class="flex justify-between ">
        <x-charts.pie-chart />
        <x-charts.bar-chart />
    </div>
@endsection
