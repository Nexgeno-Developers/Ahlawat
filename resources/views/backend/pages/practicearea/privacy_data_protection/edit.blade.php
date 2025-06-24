@extends('backend.layouts.app')
@section('page.name', 'Edit Privacy & Data Protection')
@section('page.content')
    @php
        $faq = json_decode($practicearea->faq, true);
    @endphp

    <form action="{{ route('practicearea.privacy.update') }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <input type="hidden" name="id" value="{{ $practicearea->id }}">
        <div class="card my-3">
            <h4 class="card-header header-title">Main</h4>
            <div class="card-body">
                <div class="row gy-3">
                    <div class="col-sm-6">
                        <div class="form-group mb-3">
                            <label>Title <span class="red">*</span></label>
                            <input type="text" class="form-control" name="title" value="{{ $practicearea->title }}"
                                required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group mb-3">
                            <label>Short Description <span class="red">*</span></label>
                            <input type="text" class="form-control" name="short_description"
                                value="{{ $practicearea->short_description }}" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group mb-3">
                            <label>Slug <span class="red">*</span></label>
                            <input type="text" class="form-control" name="slug" value="{{ $practicearea->slug }}" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group mb-3">
                            <label>Main Practice Area</label>
                            <select class="form-select select2" name="parent_id">
                                <option value="">--Select--</option>
                                @foreach($allpracticearea as $row)
                                    <option value="{{ $row->id }}" @if($row->id == $practicearea->parent_id) selected @endif>
                                        {{ $row->title }}
                                </option> @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <h4 class="card-header header-title">SEO</h4>
            <div class="card-body">
                <div class="col-sm-12">
                    <div class="form-group mb-3">
                        <label>Meta Title <span class="red">*</span></label>
                        <input type="text" class="form-control" name="meta_title" value="{{ $practicearea->meta_title }}"
                            required>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group mb-3">
                        <label>Meta Description <span class="red">*</span></label>
                        <textarea class="form-control" name="meta_description" rows="3"
                            required>{{ $practicearea->meta_description }}</textarea>
                    </div>
                </div>
            </div>
        </div>
        {{-- 1. Breadcrumb --}}
        <div class="card my-3">
            <h4 class="card-header header-title">Breadcrumb</h4>
            <div class="card-body">
                <div class="row gy-3">
                    <div class="col-sm-6">
                        <div class="form-group mb-3">
                            <label>Breadcrumb Title <span class="red">*</span></label>
                            <input type="text" class="form-control" name="breadcrumb_title"
                                value="{{ $practicearea->breadcrumb_title }}" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group mb-3">
                            <label>Breadcrumb Subtitle <span class="red">*</span></label>
                            <input type="text" class="form-control" name="breadcrumb_subtitle"
                                value="{{ $practicearea->breadcrumb_subtitle }}" required>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="form-group mb-3">
                            <label>Breadcrumb Image </span><span class="font-size11">(Max file size 80kb -
                                    1125*196)</label>
                            <input class="form-control mb-1" type="file" id="breadcrumb_image" name="breadcrumb_image">
                            @if($practicearea->breadcrumb_image)
                                <input id="breadcrumb_image_check" type="checkbox" name="breadcrumb_image_check" value="1">
                                <label for="breadcrumb_image_check">Remove breadcrumb image</label>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        @if($practicearea->breadcrumb_image)
                            <img src="{{ asset('storage/' . $practicearea->breadcrumb_image) }}" class="img-thumbnail">
                        @endif
                    </div>
                    {{-- <div class="col-md-4">
                        <label class="form-label">Title</label>
                        <input type="text" name="sections[breadcrumb][title]" class="form-control"
                            value="{{ old('sections.breadcrumb.title', $data['breadcrumb']['title'] ?? '') }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Subtitle</label>
                        <input type="text" name="sections[breadcrumb][subtitle]" class="form-control"
                            value="{{ old('sections.breadcrumb.subtitle', $data['breadcrumb']['subtitle'] ?? '') }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Background Image</label>
                        <input type="file" name="sections[breadcrumb][image]" class="form-control">
                        @if(!empty($data['breadcrumb']['image']))
                        <small>Current: {{ basename($data['breadcrumb']['image']) }}</small>
                        @endif
                    </div> --}}
                </div>
            </div>
        </div>

        {{-- 2. Hero Section --}}
        <div class="card my-3">
            <h4 class="card-header header-title">Hero Section</h4>
            <div class="card-body">
                <div class="row gy-3">
                    <div class="col-md-6">
                        <label class="form-label">Title</label>
                        <input type="text" name="sections[hero][title]" class="form-control"
                            value="{{ old('sections.hero.title', $data['hero']['title'] ?? '') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Subtitle</label>
                        <input type="text" name="sections[hero][subtitle]" class="form-control"
                            value="{{ old('sections.hero.subtitle', $data['hero']['subtitle'] ?? '') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Book Now Button URL</label>
                        <input type="text" name="sections[hero][button_url]" class="form-control"
                            value="{{ old('sections.hero.button_url', $data['hero']['button_url'] ?? '') }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Image</label>
                        <input type="file" name="sections[hero][image]" class="form-control">
                    </div>
                    <div class="col-md-2">
                        @if(!empty($data['hero']['image']))
                            <input type="hidden" name="sections[hero][image]" value="{{ $data['hero']['image'] }}">
                            {{-- <small>Current: {{ basename($data['hero']['image']) }}</small><br> --}}
                            <img src="{{ asset('storage/' . $data['hero']['image']) }}" class="img-thumbnail mt-2"
                                style="max-height: 100px;">
                        @endif
                    </div>
                </div>
            </div>
        </div>

        {{-- 3. Intro Section --}}
        <div class="card my-3">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-header header-title">Introduction Section</h4>
                <button type="button" class="btn btn-sm btn-success" data-toggle="add-more" data-target="#intro-container"
                    data-counter="1" data-content='
                                    <div class="intro-row row my-2 gy-2 align-items-start">
                                    <div class="col-1">
                                        <strong class="item-no">__NUM__.</strong>
                                    </div>
                                    <div class="col-10">
                                        <textarea name="sections[intro][texts][]" class="form-control trumbowyg" placeholder="Text block"></textarea>
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="remove-parent" data-parent=".intro-row">×</button>
                                    </div>
                                    </div>'>
                    + Add Card <span class="btn-num">1</span>
                </button>
            </div>
            <div class="card-body">
                <div class="row mb-3 gy-3">
                    <div class="col-md-6">
                        <label class="form-label">Section Title</label>
                        <input type="text" name="sections[intro][title]" class="form-control"
                            value="{{ old('sections.intro.title', $data['intro']['title'] ?? '') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Section Subtitle</label>
                        <input type="text" name="sections[intro][subtitle]" class="form-control"
                            value="{{ old('sections.intro.subtitle', $data['intro']['subtitle'] ?? '') }}">
                    </div>
                </div>
                <div id="intro-container">
                    @foreach(old('sections.intro.texts', $data['intro']['texts'] ?? ['']) as $idx => $text)
                        <div class="intro-row row my-2 gy-2 align-items-start">
                            <div class="col-1">
                                <strong class="item-no">{{ $idx + 1 }}.</strong>
                            </div>
                            <div class="col-10">
                                <textarea name="sections[intro][texts][]" class="form-control trumbowyg">{{ $text }}</textarea>
                            </div>
                            <div class="col-1">
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="remove-parent"
                                    data-parent=".intro-row">×</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- 4. Sectors Impacted --}}
        <div class="card my-3">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-header header-title">Sectors Impacted</h4>
                <button type="button" class="btn btn-sm btn-success" data-toggle="add-more" data-target="#sectors-container"
                    data-counter="1" data-content='
                                    <div class="sector-row row my-2 gy-2 align-items-start">
                                    <div class="col-1">
                                        <strong class="item-no">__NUM__.</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="sections[sectors][items][][title]" class="form-control" placeholder="Card Title">
                                    </div>
                                    <div class="col-md-4">
                                        <textarea name="sections[sectors][items][][text]" class="form-control trumbowyg" placeholder="Card Text"></textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="file" name="sections[sectors][items][][icon]" class="form-control">
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="remove-parent" data-parent=".sector-row">×</button>
                                    </div>
                                    </div>'>
                    + Add Card <span class="btn-num">1</span>
                </button>
            </div>
            <div class="card-body">
                <div class="row mb-3 gy-3">
                    <div class="col-md-6">
                        <label class="form-label">Section Title</label>
                        <input type="text" name="sections[sectors][title]" class="form-control"
                            value="{{ old('sections.sectors.title', $data['sectors']['title'] ?? '') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Section Subtitle</label>
                        <input type="text" name="sections[sectors][subtitle]" class="form-control"
                            value="{{ old('sections.sectors.subtitle', $data['sectors']['subtitle'] ?? '') }}">
                    </div>
                </div>
                <div id="sectors-container">
                    @foreach(old('sections.sectors.items', $data['sectors']['items'] ?? [['title' => '', 'text' => '', 'icon' => '']]) as $idx => $item)
                        <div class="sector-row row my-2 gy-2 align-items-start">
                            <div class="col-1">
                                <strong class="item-no">{{ $idx + 1 }}.</strong>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="sections[sectors][items][][title]" class="form-control"
                                    value="{{ $item['title'] ?? '' }}" placeholder="Card Title">
                            </div>
                            <div class="col-md-4">
                                <textarea name="sections[sectors][items][][text]" class="form-control trumbowyg"
                                    placeholder="Card Text">{{ $item['text'] ?? '' }}</textarea>
                            </div>
                            <div class="col-md-3">
                                <input type="file" name="sections[sectors][items][][icon]" class="form-control">
                                @if(!empty($item['icon']))
                                    <input type="hidden" name="sections[sectors][items][][icon]" value="{{ $item['icon'] }}">
                                    <small>Current: {{ basename($item['icon']) }}</small><br>
                                    <img src="{{ asset('storage/' . $item['icon']) }}" class="img-thumbnail"
                                        style="max-height: 60px;">
                                @endif
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="remove-parent"
                                    data-parent=".sector-row">×</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- 5. Assist You in Getting Comply --}}
        <div class="card my-3">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-header header-title">Assist You in Getting Comply</h4>
                <button type="button" class="btn btn-sm btn-success" data-toggle="add-more" data-target="#assist-container"
                    data-counter="1" data-content='
                                    <div class="assist-row row my-2 gy-2 align-items-start">
                                    <div class="col-1">
                                        <strong class="item-no">__NUM__.</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="sections[assist][items][][title]" class="form-control" placeholder="Card Title">
                                    </div>
                                    <div class="col-md-3">
                                        <textarea name="sections[assist][items][][text]" class="form-control trumbowyg" placeholder="Card Text"></textarea>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="sections[assist][items][][button_url]" class="form-control" placeholder="Button URL">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="file" name="sections[assist][items][][icon]" class="form-control">
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="remove-parent" data-parent=".assist-row">×</button>
                                    </div>
                                    </div>'>
                    + Add Card <span class="btn-num">1</span>
                </button>
            </div>
            <div class="card-body">
                <div class="row mb-3 gy-3">
                    <div class="col-md-6">
                        <label class="form-label">Section Title</label>
                        <input type="text" name="sections[assist][title]" class="form-control"
                            value="{{ old('sections.assist.title', $data['assist']['title'] ?? '') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Section Subtitle</label>
                        <input type="text" name="sections[assist][subtitle]" class="form-control"
                            value="{{ old('sections.assist.subtitle', $data['assist']['subtitle'] ?? '') }}">
                    </div>
                </div>
                <div id="assist-container">
                    @foreach(old('sections.assist.items', $data['assist']['items'] ?? [['icon' => '', 'title' => '', 'text' => '', 'button_url' => '']]) as $idx => $item)
                        <div class="assist-row row my-2 gy-2 align-items-start">
                            <div class="col-1">
                                <strong class="item-no">{{ $idx + 1 }}.</strong>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="sections[assist][items][][title]" class="form-control"
                                    value="{{ $item['title'] ?? '' }}" placeholder="Card Title">
                            </div>
                            <div class="col-md-3">
                                <textarea name="sections[assist][items][][text]" class="form-control trumbowyg"
                                    placeholder="Card Text">{{ $item['text'] ?? '' }}</textarea>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="sections[assist][items][][button_url]" class="form-control"
                                    value="{{ $item['button_url'] ?? '' }}" placeholder="Button URL">
                            </div>
                            <div class="col-md-2">
                                <input type="file" name="sections[assist][items][][icon]" class="form-control">
                                @if(!empty($item['icon']))
                                    <input type="hidden" name="sections[assist][items][][icon]" value="{{ $item['icon'] }}">
                                    <small>Current: {{ basename($item['icon']) }}</small><br>
                                    <img src="{{ asset('storage/' . $item['icon']) }}" class="img-thumbnail"
                                        style="max-height: 60px;">
                                @endif
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="remove-parent"
                                    data-parent=".assist-row">×</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- 6. Our Proven Compliance Process --}}
        <div class="card my-3">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-header header-title">Our Proven Compliance Process</h4>
                <button type="button" class="btn btn-sm btn-success" data-toggle="add-more" data-target="#process-container"
                    data-counter="1" data-content='
                                    <div class="process-row row my-2 gy-2 align-items-start">
                                    <div class="col-1">
                                        <strong class="item-no">__NUM__.</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="sections[process][items][][title]" class="form-control" placeholder="Card Title">
                                    </div>
                                    <div class="col-md-6">
                                        <textarea name="sections[process][items][][text]" class="form-control trumbowyg" placeholder="Card Text"></textarea>
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="remove-parent" data-parent=".process-row">×</button>
                                    </div>
                                    </div>'>
                    + Add Card <span class="btn-num">1</span>
                </button>
            </div>
            <div class="card-body">
                <div class="row mb-3 gy-3">
                    <div class="col-md-6">
                        <label class="form-label">Section Title</label>
                        <input type="text" name="sections[process][title]" class="form-control"
                            value="{{ old('sections.process.title', $data['process']['title'] ?? '') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Section Subtitle</label>
                        <input type="text" name="sections[process][subtitle]" class="form-control"
                            value="{{ old('sections.process.subtitle', $data['process']['subtitle'] ?? '') }}">
                    </div>
                </div>
                <div id="process-container">
                    @foreach(old('sections.process.items', $data['process']['items'] ?? [['title' => '', 'text' => '']]) as $idx => $item)
                        <div class="process-row row my-2 gy-2 align-items-start">
                            <div class="col-1">
                                <strong class="item-no">{{ $idx + 1 }}.</strong>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="sections[process][items][][title]" class="form-control"
                                    value="{{ $item['title'] }}" placeholder="Step Title">
                            </div>
                            <div class="col-md-6">
                                <textarea name="sections[process][items][][text]" class="form-control trumbowyg"
                                    placeholder="Step Description">{{ $item['text'] }}</textarea>
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="remove-parent"
                                    data-parent=".process-row">×</button>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mb-3">
                    <label class="form-label">Paragraph</label>
                    <textarea name="sections[process][paragraph]"
                        class="form-control trumbowyg">{{ old('sections.process.paragraph', $data['process']['paragraph'] ?? '') }}</textarea>
                </div>
            </div>
        </div>

        {{-- 7. DPDPA 2025 Penalties --}}
        <div class="card my-3">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-header header-title">DPDPA 2025 Penalties for Different Stakeholders</h4>
                <button type="button" class="btn btn-sm btn-success" data-toggle="add-more"
                    data-target="#penalties-container" data-counter="1" data-content='
                                    <div class="penalty-row row my-2 gy-2 align-items-start">
                                    <div class="col-1">
                                        <strong class="item-no">__NUM__.</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="sections[penalties][items][][title]" class="form-control" placeholder="Card Title">
                                    </div>
                                    <div class="col-md-6">
                                        <textarea name="sections[penalties][items][][text]" class="form-control trumbowyg" placeholder="Card Text"></textarea>
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="remove-parent" data-parent=".penalty-row">×</button>
                                    </div>
                                    </div>'>
                    + Add Card <span class="btn-num">1</span>
                </button>
            </div>
            <div class="card-body">
                <div class="row mb-3 gy-3">
                    <div class="col-md-6">
                        <label class="form-label">Section Title</label>
                        <input type="text" name="sections[penalties][title]" class="form-control"
                            value="{{ old('sections.penalties.title', $data['penalties']['title'] ?? '') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Section Subtitle</label>
                        <input type="text" name="sections[penalties][subtitle]" class="form-control"
                            value="{{ old('sections.penalties.subtitle', $data['penalties']['subtitle'] ?? '') }}">
                    </div>
                </div>
                <div id="penalties-container">
                    @foreach(old('sections.penalties.items', $data['penalties']['items'] ?? [['title' => '', 'text' => '']]) as $idx => $item)
                        <div class="penalty-row row my-2 gy-2 align-items-start">
                            <div class="col-1">
                                <strong class="item-no">{{ $idx + 1 }}.</strong>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="sections[penalties][items][][title]" class="form-control"
                                    value="{{ $item['title'] }}" placeholder="Card Title">
                            </div>
                            <div class="col-md-6">
                                <textarea name="sections[penalties][items][][text]" class="form-control trumbowyg"
                                    placeholder="Card Text">{{ $item['text'] }}</textarea>
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="remove-parent"
                                    data-parent=".penalty-row">×</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- 8. Case Studies --}}
        <div class="card my-3">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-header header-title">Case Studies (Slider)</h4>
                <button type="button" class="btn btn-sm btn-success" data-toggle="add-more" data-target="#cs-container"
                    data-counter="1" data-content='
                                    <div class="cs-row row my-2 gy-2 align-items-start">
                                    <div class="col-1">
                                        <strong class="item-no">__NUM__.</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="sections[case_studies][items][][title]" class="form-control" placeholder="Slide Title">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="sections[case_studies][items][][subtitle]" class="form-control" placeholder="Slide Subtitle">
                                    </div>
                                    <div class="col-md-3">
                                        <textarea name="sections[case_studies][items][][text]" class="form-control trumbowyg" placeholder="Slide Text"></textarea>
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="remove-parent" data-parent=".cs-row">×</button>
                                    </div>
                                    </div>'>
                    + Add Card <span class="btn-num">1</span>
                </button>
            </div>
            <div class="card-body">
                <div class="row mb-3 gy-3">
                    <div class="col-md-6">
                        <label class="form-label">Section Title</label>
                        <input type="text" name="sections[case_studies][title]" class="form-control"
                            value="{{ old('sections.case_studies.title', $data['case_studies']['title'] ?? '') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Section Subtitle</label>
                        <input type="text" name="sections[case_studies][subtitle]" class="form-control"
                            value="{{ old('sections.case_studies.subtitle', $data['case_studies']['subtitle'] ?? '') }}">
                    </div>
                </div>
                <div id="cs-container">
                    @foreach(old('sections.case_studies.items', $data['case_studies']['items'] ?? [['title' => '', 'subtitle' => '', 'text' => '']]) as $idx => $item)
                        <div class="cs-row row my-2 gy-2 align-items-start">
                            <div class="col-1">
                                <strong class="item-no">{{ $idx + 1 }}.</strong>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="sections[case_studies][items][][title]" class="form-control"
                                    value="{{ $item['title'] }}" placeholder="Slide Title">
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="sections[case_studies][items][][subtitle]" class="form-control"
                                    value="{{ $item['subtitle'] ?? '' }}" placeholder="Slide Subtitle">
                            </div>
                            <div class="col-md-3">
                                <textarea name="sections[case_studies][items][][text]" class="form-control trumbowyg"
                                    placeholder="Slide Text">{{ $item['text'] }}</textarea>
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="remove-parent"
                                    data-parent=".cs-row">×</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- 9. Why Choose Us (Cards) --}}
        <div class="card my-3">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-header header-title">Why Choose Us</h4>
                <button type="button" class="btn btn-sm btn-success" data-toggle="add-more" data-target="#whyus-container"
                    data-counter="1" data-content='
                                    <div class="whyus-row row my-2 gy-2 align-items-start">
                                    <div class="col-1">
                                        <strong class="item-no">__NUM__.</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="sections[whyus][items][][title]" class="form-control" placeholder="Card Title">
                                    </div>
                                    <div class="col-md-4">
                                        <textarea name="sections[whyus][items][][text]" class="form-control trumbowyg" placeholder="Card Text"></textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="file" name="sections[whyus][items][][icon]" class="form-control">
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="remove-parent" data-parent=".whyus-row">×</button>
                                    </div>
                                    </div>'>
                    + Add Card <span class="btn-num">1</span>
                </button>
            </div>
            <div class="card-body">
                <div class="row mb-3 gy-3">
                    <div class="col-md-6">
                        <label class="form-label">Section Title</label>
                        <input type="text" name="sections[whyus][title]" class="form-control"
                            value="{{ old('sections.whyus.title', $data['whyus']['title'] ?? '') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Section Subtitle</label>
                        <input type="text" name="sections[whyus][subtitle]" class="form-control"
                            value="{{ old('sections.whyus.subtitle', $data['whyus']['subtitle'] ?? '') }}">
                    </div>
                </div>
                <div id="whyus-container">
                    @foreach(old('sections.whyus.items', $data['whyus']['items'] ?? [['icon' => '', 'title' => '', 'text' => '']]) as $idx => $item)
                        <div class="whyus-row row my-2 gy-2 align-items-start">
                            <div class="col-1">
                                <strong class="item-no">{{ $idx + 1 }}.</strong>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="sections[whyus][items][][title]" class="form-control"
                                    value="{{ $item['title'] ?? '' }}" placeholder="Card Title">
                            </div>
                            <div class="col-md-4">
                                <textarea name="sections[whyus][items][][text]" class="form-control trumbowyg"
                                    placeholder="Card Text">{{ $item['text'] ?? '' }}</textarea>
                            </div>
                            <div class="col-md-3">
                                <input type="file" name="sections[whyus][items][][icon]" class="form-control">
                                @if(!empty($item['icon']))
                                    <input type="hidden" name="sections[whyus][items][][icon]" value="{{ $item['icon'] }}">
                                    <small>Current: {{ basename($item['icon']) }}</small><br>
                                    <img src="{{ asset('storage/' . $item['icon']) }}" class="img-thumbnail"
                                        style="max-height: 60px;">
                                @endif
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="remove-parent"
                                    data-parent=".whyus-row">×</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- 10. Our Focus Areas --}}
        <div class="card my-3">
            <h4 class="card-header header-title">Our Focus Areas</h4>
            <div class="card-body">
                <select class="form-select select2" name="focus_area[]" multiple>
                    <option value="" disabled>Select Focus Area</option>
                    @foreach($allpracticearea as $row)
                        <option value="{{ $row->id }}" @if(in_array($row->id, json_decode($practicearea->focus_area, true)))
                        selected @endif>
                            {{ $row->title }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        {{-- <div class="card my-3">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-header header-title">Our Focus Areas</h4>
                <button type="button" class="btn btn-sm btn-success" data-toggle="add-more" data-target="#focus-container"
                    data-counter="1" data-content='
                                    <div class="focus-row row my-2 gy-2 align-items-start">
                                    <div class="col-1">
                                        <strong class="item-no">__NUM__.</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="sections[focus_areas][items][][title]" class="form-control" placeholder="Title">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="sections[focus_areas][items][][subtitle]" class="form-control" placeholder="Subtitle">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="sections[focus_areas][items][][button_url]" class="form-control" placeholder="Button URL">
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="remove-parent" data-parent=".focus-row">×</button>
                                    </div>
                                    </div>'>
                    + Add Card <span class="btn-num">1</span>
                </button>
            </div>
            <div class="card-body">
                <div class="row mb-3 gy-3">
                    <div id="focus-container">
                        @foreach(old('sections.focus_areas.items', $data['focus_areas']['items'] ?? [['title' => '',
                        'subtitle' => '', 'button_url' => '']]) as $idx => $item)
                        <div class="focus-row row my-2 gy-2 align-items-start">
                            <div class="col-1">
                                <strong class="item-no">{{ $idx + 1 }}.</strong>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="sections[focus_areas][items][][title]" class="form-control"
                                    value="{{ $item['title'] }}" placeholder="Title">
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="sections[focus_areas][items][][subtitle]" class="form-control"
                                    value="{{ $item['subtitle'] }}" placeholder="Subtitle">
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="sections[focus_areas][items][][button_url]" class="form-control"
                                    value="{{ $item['button_url'] }}" placeholder="Button URL">
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="remove-parent"
                                    data-parent=".focus-row">×</button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div> --}}

            {{-- 11. Why Choose Us (Text Section) --}}
            <div class="card my-3">
                <h4 class="card-header header-title">Why Choose Us (Text)</h4>
                <div class="card-body">
                    <textarea class="form-control trumbowyg" name="why_choose_us" rows="5">{{ $practicearea->why_choose_us }}</textarea>
                    {{-- <textarea name="sections[why_choose_us_text][text]" class="form-control trumbowyg"
                        rows="4">{{ old('sections.why_choose_us_text.text', $data['why_choose_us_text']['text'] ?? '') }}</textarea> --}}
                </div>
            </div>

            {{-- 12. FAQ --}}

            <div class="card my-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-header header-title">FAQ</h4>
                    <button type="button" class="btn btn-sm btn-success" data-toggle="add-more" data-target="#faq-container"
                        data-counter="1" data-content='
                        <div class="faq-row row my-2 gy-2 align-items-start">
                            <div class="col-1">
                                <strong class="item-no">__NUM__.</strong>
                            </div>
                            <div class="col-md-5">
                                <input type="text" name="faq[]" class="form-control" placeholder="Enter Question here...">
                            </div>
                            <div class="col-md-5">
                                <textarea name="faq_description[]" class="form-control trumbowyg" rows="5" placeholder="Enter Answer here..."></textarea>
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="remove-parent" data-parent=".faq-row">×</button>
                            </div>
                        </div>'>
                        + Add FAQ <span class="btn-num">1</span>
                    </button>
                </div>
                <div class="card-body">
                    <div id="faq-container">
                        @foreach(old('faq', $faq ?? [['question' => '', 'answer' => '']]) as $idx => $item)
                            <div class="faq-row row my-2 gy-2 align-items-start">
                                <div class="col-1">
                                    <strong class="item-no">{{ $idx + 1 }}.</strong>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" name="faq[]" class="form-control" value="{{ $item['question'] ?? '' }}"
                                        placeholder="Enter Question here...">
                                </div>
                                <div class="col-md-5">
                                    <textarea name="faq_description[]" class="form-control trumbowyg" rows="5"
                                        placeholder="Enter Answer here...">{{ $item['answer'] ?? '' }}</textarea>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="remove-parent"
                                        data-parent=".faq-row">×</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>


            {{-- <div class="card my-3">
                <h4 class="card-header header-title">FAQ</h4>
                <div class="card-body">
                    <textarea name="sections[faq_text][text]" class="form-control trumbowyg"
                        rows="4">{{ old('sections.faq_text.text', $data['faq_text']['text'] ?? '') }}</textarea>
                </div>
            </div> --}}

            <div class="d-flex justify-content-end mb-5">
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
    </form>

@endsection

@section('page.scripts')

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.9.3/plugins/colors/trumbowyg.colors.min.js"></script> --}}
    <script>
        function reinitEditors() {
            $('.trumbowyg').each(function () {
                if ($(this).parent().hasClass('trumbowyg-box')) {
                    $(this).trumbowyg('destroy');
                }
            });
            initTrumbowyg('.trumbowyg');
        }
        initSelect2('.select2');
        // 1) Number all existing rows and
        // 2) Set each “add-more” button’s data-counter & .btn-num to (rows+1)
        function initCounters() {
            $('[data-toggle="add-more"]').each(function () {
                var $btn = $(this),
                    target = $btn.data('target'),
                    $rows = $(target).children();

                // Number existing rows
                $rows.each(function (i) {
                    $(this).find('.item-no').first().text((i + 1) + '.');
                });

                // Next counter = existing count + 1
                var next = $rows.length + 1;
                $btn.data('counter', next);
                $btn.find('.btn-num').text(next);
            });
        }

        $(function () {
            initTrumbowyg('.trumbowyg');

            // initialize counters on load
            initCounters();

            // your existing add-more handler
            $(document).on('click', '[data-toggle="add-more"]', function (e) {
                e.preventDefault();
                var $btn = $(this),
                    target = $btn.data('target'),
                    tpl = $btn.data('content'),
                    count = $btn.data('counter');

                // inject the serial number
                var html = tpl.replace(/__NUM__/g, count);
                $(target).append(html);
                reinitEditors();

                // bump the counter
                count++;
                $btn.data('counter', count);
                $btn.find('.btn-num').text(count);
            });

            // remove-parent stays the same
            $(document).on('click', '[data-toggle="remove-parent"]', function () {
                $(this).closest($(this).data('parent')).remove();
                // re-run numbering if you like:
                initCounters();
            });
        });
    </script>
@endsection