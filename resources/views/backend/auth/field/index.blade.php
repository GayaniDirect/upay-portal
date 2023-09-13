@extends('backend.layouts.app')

@section('title', __('Field Management'))

@section('content')
    <x-backend.card>
        <x-slot name="header" style="font-weight: bold; font-size: 16px;">
            @lang('Field Management')
        </x-slot>

        <x-slot name="headerActions">
{{--            <x-utils.link--}}
{{--                icon="c-icon cil-plus"--}}
{{--                class="card-header-action"--}}
{{--                :href="route('admin.auth.field.create')"--}}
{{--                :text="__('Create Field')"--}}
{{--            />--}}
        </x-slot>

        <x-slot name="body">
            <livewire:field-table />
        </x-slot>
    </x-backend.card>
@endsection
