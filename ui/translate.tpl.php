<h2>{{\controller\projects::getProjnameByHash(@PARAMS.project)}} &raquo; Translation &raquo; {{@PARAMS.lang}}</h2>
<table class="translation">
<F3:repeat group="{{@strings}}" value="{{@string}}">
    <tr class="transRow {{@string.translation!=NULL?'green':'red'}}">
        <td class="transRowOriginal">
            <textarea readonly="readonly" tabindex="-1">{{nl2br(@string.original)}}</textarea>
        </td>
        <td class="transRowTranslation">
            <form action="{{@BASE}}/ajax/translate/{{@string.hash}}/{{@PARAMS.lang}}" method="post">
                <textarea name="translation" class="translationField">{{@string.translation}}</textarea>
            </form>
            <span class="success">✔</span>
        </td>
    </div>
</F3:repeat>
</table>