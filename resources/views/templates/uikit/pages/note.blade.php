@extends('templates.uikit/app')

@section('title')
{{ env('APP_NAME') }} {{ $data['note_name'] }}
@endsection
@section('content')
<form method="post" action="{{ route('actions_update_post') }}">
    @csrf
    <fieldset class="uk-fieldset">

        <legend class="uk-legend">{{ $data['note_name'] }}</legend>

        <div class="uk-margin">
            <input class="uk-input" type="text"
            name="note_description"
            value="{{ $data['note_description'] }}"
            placeholder="Note description"
            spellcheck="false"
            >
        </div>

        <div class="uk-margin">
            <textarea class="uk-textarea" rows="5" name="note_content" placeholder="Textarea" spellcheck="false">{{ $data['note_content'] }}</textarea>
        </div>

        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label><input class="uk-radio" type="radio" value="private" name="note_visibility" checked> Private</label>
            <label><input class="uk-radio" type="radio" value="public" name="note_visibility"> Public</label>
        </div>

        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <button class="uk-button uk-button-primary uk-button-large">Save note</button>
        </div>

    </fieldset>
</form>
@endsection
