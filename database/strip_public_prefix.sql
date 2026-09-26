-- Removes the leading "public/" from stored file paths.
-- Run once on every database (local + live) after deploying the path changes.

UPDATE media    SET file_url    = SUBSTRING(file_url, 8)    WHERE file_url    LIKE 'public/%';
UPDATE generals SET logo        = SUBSTRING(logo, 8)        WHERE logo        LIKE 'public/%';
UPDATE generals SET footer_logo = SUBSTRING(footer_logo, 8) WHERE footer_logo LIKE 'public/%';
UPDATE generals SET favicon     = SUBSTRING(favicon, 8)     WHERE favicon     LIKE 'public/%';
