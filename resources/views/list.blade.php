<form method="POST" action="{{ url('/list') }}">
    @csrf
    <input type="text" name="category" placeholder="Search Company">
    <button type="submit">Search</button>
</form>

@if(isset($list))
    <h2>Search Results:</h2>
    <ul>
        @foreach($list as $item)
            <li>{{ $item->name }} - {{ $item->symbol }} - {{ $item->currency }} - {{ $item->stockExchange }} - {{ $item->exchangeShortName }}</li>
        @endforeach
    </ul>
@else
    <p>No results found.</p>
@endif