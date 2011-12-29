<h2>{{@project->name}}</h2>

<F3:check if="{{@numStrings > 0}}">
    <F3:true>
    <table class="languages">
        <thead>
            <tr>   
                <th>Language</th>
                <th>% Done</th>
                <th>Translated</th>
                <th>Untranslated</th>
            </tr>
        </thead>
        <tbody>
        <F3:repeat group="{{@numTrans}}" value="{{@trans}}">
            <tr>
                <td>&rsaquo; <a href="{{@BASE}}/project/{{@PARAMS.project}}/{{@trans.short}}">{{\controller\helper::getLang(@trans.short)}}</a></td>
                <td>{{(@trans.count * 100) / @numStrings}}</td>
                <td>{{@trans.count}}</td>
                <td>{{@numStrings - @trans.count}}</td>
            </tr>
        </F3:repeat>
        </tbody>
    </table>
    </F3:true>
    <F3:false>
        <p class="info message">There are no strings to translate.</p>
    </F3:false>
</F3:check>
