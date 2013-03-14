@layout('layouts/container')

@section('content')
    @include('layouts/control')

    <div id="welcome" class="panel panel85 impact">
        <div class="content">
            <h2>Hi There...</h2>
        </div>
    </div>

    <div id="lowdown" class="panel panel50 scrollable horizontal">
        <div class="filler inset" data-stellar-background-ratio="0.5"></div>
        <div class="content">
            <h2>The Lowdown</h2>
            <p>We are a web development firm.</p>
            <p>That encompasses everything from a simple layout to a complex, backend system. Whatever your hurdle might be, The Daxian Group can provide you with a solution that will make you smile.</p>
            <p>You can take comfort knowing that the product you describe is exactly what you're going to get at the end of the process. Chances are, it's going to be better than what you expected. That's not something we try to do for our customers, it's something that just happens.</p>
        </div>
    </div>

    <div id="method" class="panel panel60">
        <div class="content">
            <h2>The Daxian Group Method</h2>
            <p>We don't try to re-invent the wheel...</p>
            <p>We just make the wheel smoother and reduce the road noise. That is to say, we figure out what your needs are and build you something to suit those needs. You are part of the process, from beginning to end...</p>
            <p>What better resource to have during the development process, than the source with all the ideas?</p>
        </div>
    </div>

    @include('home.works')

    <div id="really" class="panel panel100 impact">
        <div class="content">
            <h2>Really, It's Easy...</h2>
            <p>The last thing anyone wants, is a difficult experience.</p>
            <p>The Daxian Group strives to make the development of your online presence as painless as possible. You can consider us your friends... Who will do all the work and meet your requirements, suggest ideas you might not have thought about and won't bat an eye if the direction changes mid-stream.</p>
        </div>
    </div>

    @include('home.contact')
@endsection