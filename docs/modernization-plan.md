# Modernization Plan: Fiverr Clone

This document outlines the incremental migration plan to move the current Laravel/Livewire
application onto a **Laravel 11 + Livewire 3 + Vite + Tailwind** stack while preserving core
Fiverr-like marketplace functionality.

## Goals
- Upgrade framework/runtime to Laravel 11 and PHP 8.3+ with Livewire 3.
- Replace legacy asset pipeline with Vite + Tailwind.
- Stabilize core marketplace workflows (browse gigs, order flow, messaging, payments).
- Reduce merge conflicts by avoiding committed generated artifacts.

## Current state (baseline)
- Laravel 10.x with Livewire 2.x and mixed asset tooling.
- Chat/messaging implemented via Chatify.
- Admin and marketplace features implemented via Livewire components.

## Migration phases

### Phase 1 — Platform baseline
- **PHP**: require 8.3+.
- **Laravel**: upgrade to 11.x.
- **Livewire**: upgrade to 3.x.
- Ensure Composer constraints and lockfile align with the target PHP runtime.

### Phase 2 — Frontend stack
- Replace legacy build tooling with **Vite**.
- Standardize **Tailwind** config and remove deprecated/unused CSS.
- Introduce a component library for consistent UI primitives.

### Phase 3 — Marketplace flows
- Gigs browsing/search, seller profiles, checkout, and order lifecycle.
- Payments: verify provider SDK compatibility and unify gateways.
- Messaging: confirm Chatify compatibility or replace with Livewire 3-ready chat UI.

### Phase 4 — Observability & QA
- Add automated tests for critical flows (auth, checkout, messaging).
- Add performance budgets and Lighthouse checks for core pages.

## Deliverables
- Upgraded framework + dependencies.
- Vite/Tailwind asset pipeline.
- Updated UI components and layout system.
- Cleaned repository (ignore generated cache/assets).

## Notes
This plan is incremental to reduce risk. Each phase can land as separate PRs with validated
integration points and rollback paths.
