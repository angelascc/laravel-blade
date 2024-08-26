@extends('layouts.app')

@section('title', 'Home page')

@section('head', 'Home Page')

<@php
    $cards = [
        [
            'title' => 'Card 1',
            'content' => 'Lorem ipsum dolor sit amet, consectet',
            'link' => 'http//www.example.com',
        ],
        [
            'title' => 'Card 2',
            'content' => 'Lorem ipsum dolor sit amet, consectet',
            'link' => 'http//www.example.com',
        ],
    ];
@endphp

@section('content')
    @foreach ($cards as $card)
        <x-card
            title="{{ $card['title'] }}"
            content="{{ $card['content'] }}"
            link="{{ $card['link'] }}"
        />
    @endforeach

    <x-button type="primary">
        Click
    </x-button>

    <x-button type="danger">
        Click 2
    </x-button>
@endsection

@section('footer', 'Footer')