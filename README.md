#Persisted sanitized pattern mapping

## What does it do?

Enables the possibility generating sanitized URL parts from persisted patterns.

## How does it work?

Adds a new routing aspect extending the PersistedPatternMapper from TYPO3 core with sanitized URL parts.

```yaml
aspects:
  country:
    type: PersistedSanitizedPatternMapper
    tableName: static_countries
    routeFieldPattern: '^(.*)-(?P<uid>\d+)$'
    routeFieldResult: '{cn_short_de|sanitized}-{uid}'
    localeMap:
      - locale: 'de_*'
        field: cn_short_de
      - locale: 'en_*'
        field: cn_short_en
  territory:
    type: PersistedSanitizedPatternMapper
    tableName: static_territories
    routeFieldPattern: '^(.*)-(?P<uid>\d+)$'
    routeFieldResult: '{tr_name_de|sanitized}-{uid}'
    localeMap:
      - locale: 'de_*'
        field: tr_name_de
      - locale: 'en_*'
        field: tr_name_en
```

As you can see, localization is respected, if needed.

## Installation

Only install the extension and configure your persisted pattern mappers as described above. 