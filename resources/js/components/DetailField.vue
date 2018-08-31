<template>
    <panel-item :field="field">
        <div slot="value">
            <ul>
                <li v-for="(item, index) in field.value" v-bind:key="item">
                    <p :class="{ 'highlight': field.highlightFirst === true && index === 0 }">{{item}}</p>
                </li>
            </ul>
        </div>

    </panel-item>
    
</template>

<script>
export default {
    props: ["resource", "resourceName", "resourceId", "field"]
};
</script>
<style lang="scss" scoped>
ul {
    list-style: none;
    padding: 0px;
}
p.highlight {
    font-weight: bold;
}
</style>

