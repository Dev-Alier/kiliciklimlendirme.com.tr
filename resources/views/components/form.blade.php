@props(['data'])
<style>
    table tr>td{
        padding-top: 10px
    }
</style>
<div class="row">
    <table class="form-table">
        @foreach (json_decode($data, true) as $key => $d)
            <tr>
                @if ($d['type'] == 'hidden')
                    <input type="hidden" name="{{ $d['name'] }}" value="{{ $d['value'] }}">
                @else
                <td>
                    <b>{{ $d['label'] }}</b>
                </td>
                <td>
                    @switch($d['type'])
                        @case('text')
                        @case('password')
                            <input type="{{ $d['type'] }}" name="{{ $d['name'] }}" value="{{ old($d['name']) ? old($d['name']) : $d['value'] }}" class="{{ $d['class'] }}@error($d['name']) is-invalid @enderror" style="margin: 12px 0 !important;" {{ !empty($d['attributes']) ? $d['attributes'] : '' }}>
                        @break

                        @case('email')
                            <input type="email" name="{{ $d['name'] }}" value="{{ old($d['name']) ? old($d['name']) : $d['value'] }}" class="{{ $d['class'] }}  @error($d['name']) is-invalid @enderror" {{ !empty($d['attributes']) ? $d['attributes'] : '' }}>
                        @break

                        @case('select')
                            <div>
                                <select name="{{ $d['name'] }}" name="{{ $d['name'] }}" class="{{ $d['class'] }}">
                                    @foreach ($d['options'] as $key => $opt)
                                        <option value="{{ $opt['key'] }}" {{ $d['value'] == $opt['key'] ? 'selected' : '' }} {{ !empty($d['attributes']) ? $d['attributes'] : '' }}> {{ $opt['value'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        @break

                        @case('radio')
                            @foreach ($d['options'] as $key => $value)
                                <div style="float: left;margin-right: 20px;">
                                    <input class="{{ $d['class'] }} @error($d['name']) is-invalid @enderror" type="radio" name="{{ $d['name'] }}" value="{{ old($key) ? old($key) : '' }}" {{ $d['value'] == $opt['key'] ? 'checked' : '' }} {{ !empty($d['attributes']) ? $d['attributes'] : '' }}>
                                    <label class="form-check-label" for="{{ $d['name'] }}"> {{ old($d['name']) ? old($d['name']) : $d['value'] }} </label>
                                </div>
                            @endforeach
                        @break

                        @case('checkbox')
                            @foreach ($d['options'] as $key => $value)
                                <div style="float: left;margin-right: 20px;">
                                    <input class="form-check-input {{ $d['class'] }}" type="checkbox" value="{{ $key }}" name="{{ $d['name'] }}[]" {{ !empty($d['attributes']) ? $d['attributes'] : '' }}>
                                    <label class="form-check-label" for="{{ $key }}"> {{ $d['options'][0]['value'] }} </label>
                                </div>
                            @endforeach
                        @break

                        @case('textarea')
                            <textarea class="{{ $d['class'] }}" name="{{ $d['name'] }}" {{ !empty($d['attributes']) ? $d['attributes'] : '' }} @error($d['name']) is-invalid @enderror">{!! old($d['name']) ? old($d['name']) : $d['value'] !!}</textarea>
                        @break

                        @case('image')
                            <div style="display: flex;align-items:center">
                                <input type="file" accept="image/*" onchange="setImage(this);" class="form-control" style="margin-right: 20px" name="{{ $d['name'] }}" {{ !empty($d['attributes']) ? $d['attributes'] : '' }} value="{{ asset($d['imagePath'] . '/' . $d['image']) }}">
                                <input type="hidden" name="{{ $d['name'] }}" value="{{ $d['image'] }}">
                                <img name="img" id="img" src="{{ $d['image'] != '' ? asset($d['imagePath'] . '/' . $d['image']) : asset('/assets/images/default.png') }}" width="100" height="100" alt="">
                            </div>
                        @break

                        @case('colorpicker')
                            <div class="btnColor">
                                <input type="text" class="{{ $d['class'] }}" name="{{ $d['name'] }}" oninput="updateColor('{{ $d['class'] }}','color',this.value)" value="{{ old($d['name']) ? old($d['name']) : $d['value'] }}" oninput="updateColor('{{ $d['class'] }}','color',this.value)" style="background-color: {{ $d['value'] }}">
                                <div class="colorpicker">
                                    <input type="color" id="section1ParagraphColor" class="{{ $d['class'] }}" name="color" value="{{ $d['value'] }}" onInput="updateColor('{{ $d['class'] }}','color',this.value)">
                                </div>
                            </div>
                        @break

                        @case('date')
                            <div>
                                <input class="{{ $d['class'] }}" name="{{ $d['name'] }}" type="date" value="{{ old($d['name']) ? old($d['name']) : $d['value'] }}" id="example-date-input">
                            </div>
                        @break
                    @endswitch
                    @endif
                </td>
            </tr>
        @endforeach

    </table>

    @section('scripts')

    @endsection
