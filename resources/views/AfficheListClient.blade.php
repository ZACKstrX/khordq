<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
        {{-- @dd($client) --}}
        @foreach ($client as $item)
            <p>{{ $item['name'] }}</p>
        @endforeach
</div>
