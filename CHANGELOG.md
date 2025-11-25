# Changelog

All notable changes to `laravel-enhanced-failed-jobs` will be documented in this file.

## 1.0.0 - 2025-11-25

- Initial release
- Enhanced `queue:failed` command with JSON output (`--json`)
- Filtering by queue (`--queue`), connection (`--connection`), date range (`--after`, `--before`), and job class (`--class`)
- Result limiting (`--limit`)
- QueueWatch agent for real-time failure reporting (optional)
