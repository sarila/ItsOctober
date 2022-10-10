const person = {
  name: 'foobar',
  age: 20,
  friend: { name: 'lorem ipsum', age: 21 },
  childrens: [{ name: 'children 1' }, { name: 'children 2' }],
};
const { name } = person;
const { age: personAge } = person;
const { friend: { name: friendName } } = person;
const { friend: { ...friendProperties } } = person;
const { childrens: [ children1, children2 ] } = person;
