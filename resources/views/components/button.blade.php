@props(['class','value'])
    <button class="btn {{ $class }}" style="background-color: {{ $setting->button_color ?? '' }}; color: {{ $setting->button_text_color ?? 'white'}}" type="submit">{{ $value }}
    </button>
