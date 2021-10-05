<!DOCTYPE html>

<title>My blog</title>
<link rel="stylesheet" href="app.css">

<body>

    <?php foreach ($posts as $post) : $post) : ?>
        <article>
            <?= $post; ?>
        </article>
    <?php endforeach; ?>




{{--    <article>--}}
{{--        <h1><a href="/posts/my-first-post">Kev</a></h1>--}}
{{--        <p1>--}}
{{--            Man of <strong>iron</strong>!--}}
{{--        </p1>--}}
{{--    </article>--}}

{{--    <article>--}}
{{--        <h1><a href="/posts/my-second-post">Duen</a></h1>--}}
{{--        <p1>--}}
{{--            The real rng jesus--}}
{{--        </p1>--}}
{{--    </article>--}}

{{--    <article>--}}
{{--        <h1><a href="/posts/my-third-post">Sofus</a></h1>--}}
{{--        <p1>--}}
{{--            <strong>Good guy</strong> Sof--}}
{{--        </p1>--}}
{{--    </article>--}}

{{--    <article>--}}
{{--        <h1><a href="/posts/my-fourth-post">Øg</a></h1>--}}
{{--        <p1>--}}
{{--            Mr. Cox farmer himself--}}
{{--        </p1>--}}
{{--    </article>--}}

</body>
