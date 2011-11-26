<h2>{{@project->name}}</h2>

<table>
    <thead>
        <tr>   
            <th>Language</th>
            <th>% Done</th>
            <th>Translated</th>
            <th>Untranslated</th>
        </tr>
    </thead>
    <tbody>
        {{* TODO: get all languages instead of only these with translations *}}
    <F3:repeat group="{{@numTrans}}" value="{{@trans}}">
        <tr>
            <td>{{\controller\helper::getLang(@trans.language)}}</td>
            <td>{{@numStrings * 100 / @trans.count}}</td>
            <td>{{@trans.count}}</td>
            <td>{{@numStrings - @trans.count}}</td>
        </tr>
    </F3:repeat>
    </tbody>
</table>