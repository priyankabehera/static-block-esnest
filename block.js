const { registerBlockType } = wp.blocks;

registerBlockType('gwg/esnext-starter', {
    title: 'Get With Gutenberg - ES.Next Starter',
    category: 'common',
    icon: 'universal-access-alt',
    edit() {
        return <p>Hello editor.</p>
    },

    save() {
        return <p>Hello saved content in frontend.</p>
    },
});