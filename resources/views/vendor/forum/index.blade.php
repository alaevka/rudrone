@extends('layouts.empty')

@section('content')
<!-- @include('forum::partials.breadcrumbs') -->
<div class="page-header">
    <h1>{{{ Lang::get('site/user.welcome_to_our_rudrone_forums') }}}</h1>
</div>

@foreach ($categories as $category)

<table class="table table-index" id="borderless" width="100%">
    <tbody>
        <tr>
            <td colspan="3" class="forum-category-title-block">
                <p class="lead forum-category-title" style="font-weight: bold; text-transform: uppercase;">{{ $category->title }}<!-- <a href="{{ $category->route }}">{{ $category->title }}</a> --></p>
                {{ $category->subtitle }}

                @if ($category->newestThread)
				<div class="text-muted">
                    <br>
                    {{ trans('forum::base.newest_thread') }}:
                    <a href="{{ $category->newestThread->route }}">
                        {{ $category->newestThread->title }}
                        ({{ $category->newestThread->authorName }})</a>
                    <br>
                    {{ trans('forum::base.last_post') }}:
                    <a href="{{ $category->latestActiveThread->lastPost->route }}">
                        {{ $category->latestActiveThread->title }}
                        ({{ $category->latestActiveThread->lastPost->authorName }})</a>
				</div>
                @endif
            </td>
        </tr>
        @if (!$category->subcategories->isEmpty())
        <tr>
            <td align="left"><!-- {{ trans('forum::base.subcategories') }} --></td>
            <th align="left">{{ trans('forum::base.threads') }}</th>
            <th align="left">{{ trans('forum::base.posts') }}</th>
        </tr>
        @foreach ($category->subcategories as $subcategory)
        <tr>
            <td width="70%">
                <a href="{{ $subcategory->route }}">{{ $subcategory->title }}</a>
                <br>
                {{ $subcategory->subtitle }}
                @if ($subcategory->newestThread)
				<div class="text-muted">
                    <br>
                    {{ trans('forum::base.newest_thread') }}:
                    <a href="{{ $subcategory->newestThread->route }}">
                        {{ $subcategory->newestThread->title }}
                        ({{ $subcategory->newestThread->authorName }})</a>
                    <br>
                    {{ trans('forum::base.last_post') }}:
                    <a href="{{ $subcategory->latestActiveThread->lastPost->route }}">
                        {{ $subcategory->latestActiveThread->title }}
                        ({{ $subcategory->latestActiveThread->lastPost->authorName }})</a>
				</div>
                @endif
            </td>
            <td>{{ $subcategory->threadCount }}</td>
            <td>{{ $subcategory->postCount }}</td>
        </tr>
        @endforeach
        @else
        <tr>
            <th colspan="3">
                {{ trans('forum::base.no_categories') }}
            </th>
        </tr>
        @endif
    </tbody>
</table>
@endforeach
@overwrite
