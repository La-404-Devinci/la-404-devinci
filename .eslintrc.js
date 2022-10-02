module.exports = {
    extends: [
        // 'eslint:recommended',
        'plugin:vue/vue3-essential',
        'plugin:vue/vue3-strongly-recommended',
        'plugin:vue/vue3-recommended',
    ],
    rules: {
        'vue/html-indent': ['warn', 'tab'],
        'vue/multi-word-component-names': 'off',
        'vue/require-default-prop': 'off',
        'vue/attribute-hyphenation': 'off',
        'vue/v-on-event-hyphenation': 'off',
        'vue/require-prop-types': 'off',
        'vue/no-v-html': 'off',
        'vue/no-mutating-props': 'off',
        'vue/no-template-shadow': 'off',
        'vue/v-on-event-hyphenation': 'off',
        'vue/attribute-hyphenation': 'off',
    }
}
