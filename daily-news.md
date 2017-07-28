# Daily News production instructions

## In-article embed
```
<iframe src="http://interactive.nydailynews.com/quiz/game-of-thrones-dead/?v2" scrolling="no" id="the-embed"></iframe>

<style type="text/css">
  iframe#the-embed { height: 630px; width:100%; margin-top:-10px; }
  @media only screen and (max-width:360px) {
    iframe#the-embed { height: 650px; }
  }
</style>

<p>
  &raquo; <a href="http://interactive.nydailynews.com/poll/">View all the Daily News polls</a>.</p>

```
