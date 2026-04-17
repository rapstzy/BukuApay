-- Migration number: 0001 	 2026-04-17T04:25:28.740Z
-- migrations/0000_init_tables.sql
CREATE TABLE IF NOT EXISTS books (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    author TEXT,
    status TEXT DEFAULT 'available'
);

CREATE TABLE IF NOT EXISTS loans (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    book_id INTEGER,
    borrower_name TEXT,
    loan_date TEXT,
    FOREIGN KEY (book_id) REFERENCES books(id)
);
