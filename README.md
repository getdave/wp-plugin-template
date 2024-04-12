## Getting Started

- Clone this repo to your machine providing a new folder name

```
git clone --depth 1 git@github.com:getdave/wp-plugin-template.git MY_PROJECT_NAME
```

- Remove the Git repo

```
cd MY_PROJECT_NAME
rm -rf .git/
```

- Initialise a new Git repo - `git init`.
- Use new Plugin name strings:
  - Replace `getdave-plugin-template` with `getdave-MY_PROJECT_NAME`.
  - Update `Plugin Name` header in `plugin.php`.
- Install dependencies - `npm i`.
- Start development! - `npm start`.
