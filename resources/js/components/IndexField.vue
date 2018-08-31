<template>

    <ul class="py-3 pl-0">
        <li v-for="(item, index) in field.value" v-bind:key="item">
            <p :class="{ 'highlight': field.highlightFirst === true && index === 0 }">{{item}}</p>
        </li>
    </ul>
</template>

<script>
export default {
    props: ["resourceName", "field"]
};
</script>

<style lang="scss" scoped>
ul {
    list-style: none;
}
p.highlight {
    font-weight: bold;
}
</style>