<table class="translation">
<F3:repeat group="{{@strings}}" value="{{@string}}">
    <tr class="transRow {{@string.translation!=NULL?'green':'red'}}">
        <td class="transRowOriginal">
            <div>{{nl2br(@string.original)}}</div>
        </td>
        <td class="transRowTranslation">
            <form action="{{@BASE}}/ajax/translate/{{@string.hash}}/{{@PARAMS.lang}}" method="post">
                <textarea name="translation" class="translationField">{{@string.translation}}</textarea>
            </form>
        </td>
    </div>
</F3:repeat>
</table>