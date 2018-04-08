<div class="custom-select" style="margin-bottom:10%">
    <h2>Select your own loadout!</h2>
    
    <div style="width:200px;display:inline-block;">
        <h4>Body</h4>
        <select id="bodyColour">
            {bodyColours}
            <option id={CategoryId} name={AccessoryId}>{Description}</option>
            {/bodyColours}
        </select>
    </div>
    <div style="width:200px;display:inline-block;">
        <h4>Rims</h4>
        <select id="rims">
            {rims}
            <option id={CategoryId} name={AccessoryId}>{Description}</option>
            {/rims}
        </select>
    </div>
    <div style="width:200px;display:inline-block;">
        <h4>Storage</h4>
        <select id="storage">
            {storages}
            <option id={CategoryId} name={AccessoryId}>{Description}</option>
            {/storages}
        </select>
    </div>
    <div style="width:200px;display:inline-block;">
        <h4>Spoiler</h4>
        <select id="spoiler">
            {spoilers}
            <option id={CategoryId} name={AccessoryId}>{Description}</option>
            {/spoilers}
        </select>
    </div>
</div>