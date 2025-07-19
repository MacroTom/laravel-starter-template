import { AbilityBuilder, createMongoAbility } from '@casl/ability';

export const ability = createMongoAbility(); // Persistent CASL instance

export const updateAbility = (user) => {
    const { can, build } = new AbilityBuilder(createMongoAbility);

    const permissions = user?.permissions || [];

    permissions.forEach(permission => can(...permission.split(' ')));

    ability.update(build().rules); // Update the existing ability instance
};