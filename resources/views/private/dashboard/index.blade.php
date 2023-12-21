@extends('layouts.app')

@section('content')
<livewire:layouts.breadcrumb />

    <div class="flex justify-between">
        <livewire:charts.pie-chart />
        <livewire:charts.bar-chart />
    </div>
@endsection
