module.exports = {
  root: true,
  env: {
    browser: true,
    es6: true,
    "jquery": true
  },
  extends: "eslint:recommended",
  parser: "babel-eslint",
  parserOptions: {
    ecmaVersion: 2018,
    sourceType: "module"
  },
  rules: {
    indent: ["error", 2],
    quotes: ["error", "single"],
    semi: ["error", "always"],
    curly: "error",
    "linebreak-style": ["error", "unix"],
    "brace-style": ["error", "stroustrup"],
    "block-spacing": "error",
    "comma-spacing": ["error", {
      "before": false,
      "after": true
    }],
    "computed-property-spacing": ["error", "never"],
    "func-call-spacing": ["error", "never"],
    "arrow-spacing": ["error", {
      "before": true,
      "after": true
    }],
    "key-spacing": "error",
    "keyword-spacing": ["error", {
      "before": true,
      "after": true
    }],
    "no-whitespace-before-property": "error",
    "space-before-blocks": "error",
    "padding-line-between-statements": [
      "error",
      {
        blankLine: "always",
        prev: "*",
        next: "return"
      },
      {
        blankLine: "always",
        prev: ["const", "let", "var"],
        next: "*"
      },
      {
        blankLine: "any",
        prev: ["const", "let", "var"],
        next: ["const", "let", "var"]
      },
      {
        blankLine: "always",
        prev: "*",
        next: "block-like"
      },
      {
        blankLine: "always",
        prev: "block-like",
        next: "*"
      }
    ]
  }
};
