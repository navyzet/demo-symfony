<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201009212250 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE symfony_demo_comment_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE symfony_demo_post_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE symfony_demo_tag_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE symfony_demo_user_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('ALTER TABLE symfony_demo_comment ALTER id TYPE INT');
        $this->addSql('ALTER TABLE symfony_demo_comment ALTER id DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_comment ALTER post_id TYPE INT');
        $this->addSql('ALTER TABLE symfony_demo_comment ALTER post_id DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_comment ALTER post_id SET NOT NULL');
        $this->addSql('ALTER TABLE symfony_demo_comment ALTER author_id TYPE INT');
        $this->addSql('ALTER TABLE symfony_demo_comment ALTER author_id DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_comment ALTER author_id SET NOT NULL');
        $this->addSql('ALTER TABLE symfony_demo_comment ALTER content SET NOT NULL');
        $this->addSql('ALTER TABLE symfony_demo_comment ALTER published_at TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE symfony_demo_comment ALTER published_at DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_comment ALTER published_at SET NOT NULL');
        $this->addSql('ALTER INDEX idx_16464_idx_53ad8f834b89032c RENAME TO IDX_53AD8F834B89032C');
        $this->addSql('ALTER INDEX idx_16464_idx_53ad8f83f675f31b RENAME TO IDX_53AD8F83F675F31B');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER id TYPE INT');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER id DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER author_id TYPE INT');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER author_id DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER author_id SET NOT NULL');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER title TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER title DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER title SET NOT NULL');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER slug TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER slug DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER slug SET NOT NULL');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER summary TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER summary DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER summary SET NOT NULL');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER content SET NOT NULL');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER published_at TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER published_at DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER published_at SET NOT NULL');
        $this->addSql('ALTER INDEX idx_16470_idx_58a92e65f675f31b RENAME TO IDX_58A92E65F675F31B');
        $this->addSql('ALTER TABLE symfony_demo_post_tag ALTER post_id TYPE INT');
        $this->addSql('ALTER TABLE symfony_demo_post_tag ALTER post_id DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_post_tag ALTER tag_id TYPE INT');
        $this->addSql('ALTER TABLE symfony_demo_post_tag ALTER tag_id DROP DEFAULT');
        $this->addSql('ALTER INDEX idx_16476_idx_6abc1cc44b89032c RENAME TO IDX_6ABC1CC44B89032C');
        $this->addSql('ALTER INDEX idx_16476_idx_6abc1cc4bad26311 RENAME TO IDX_6ABC1CC4BAD26311');
        $this->addSql('ALTER TABLE symfony_demo_tag ALTER id TYPE INT');
        $this->addSql('ALTER TABLE symfony_demo_tag ALTER id DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_tag ALTER name TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE symfony_demo_tag ALTER name DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_tag ALTER name SET NOT NULL');
        $this->addSql('ALTER INDEX idx_16479_uniq_4d5855405e237e06 RENAME TO UNIQ_4D5855405E237E06');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER id TYPE INT');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER id DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER full_name TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER full_name DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER full_name SET NOT NULL');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER username TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER username DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER username SET NOT NULL');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER email TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER email DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER email SET NOT NULL');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER password TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER password DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER password SET NOT NULL');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER roles TYPE JSON');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER roles DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER roles SET NOT NULL');
        $this->addSql('ALTER INDEX idx_16485_uniq_8fb094a1f85e0677 RENAME TO UNIQ_8FB094A1F85E0677');
        $this->addSql('ALTER INDEX idx_16485_uniq_8fb094a1e7927c74 RENAME TO UNIQ_8FB094A1E7927C74');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE symfony_demo_comment_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE symfony_demo_post_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE symfony_demo_tag_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE symfony_demo_user_id_seq CASCADE');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER id TYPE BIGINT');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER id DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER full_name TYPE TEXT');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER full_name DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER full_name DROP NOT NULL');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER username TYPE TEXT');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER username DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER username DROP NOT NULL');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER email TYPE TEXT');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER email DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER email DROP NOT NULL');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER password TYPE TEXT');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER password DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER password DROP NOT NULL');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER roles TYPE TEXT');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER roles DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_user ALTER roles DROP NOT NULL');
        $this->addSql('ALTER INDEX uniq_8fb094a1f85e0677 RENAME TO idx_16485_uniq_8fb094a1f85e0677');
        $this->addSql('ALTER INDEX uniq_8fb094a1e7927c74 RENAME TO idx_16485_uniq_8fb094a1e7927c74');
        $this->addSql('ALTER TABLE symfony_demo_comment ALTER id TYPE BIGINT');
        $this->addSql('ALTER TABLE symfony_demo_comment ALTER id DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_comment ALTER post_id TYPE BIGINT');
        $this->addSql('ALTER TABLE symfony_demo_comment ALTER post_id DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_comment ALTER post_id DROP NOT NULL');
        $this->addSql('ALTER TABLE symfony_demo_comment ALTER author_id TYPE BIGINT');
        $this->addSql('ALTER TABLE symfony_demo_comment ALTER author_id DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_comment ALTER author_id DROP NOT NULL');
        $this->addSql('ALTER TABLE symfony_demo_comment ALTER content DROP NOT NULL');
        $this->addSql('ALTER TABLE symfony_demo_comment ALTER published_at TYPE TIMESTAMP(0) WITH TIME ZONE');
        $this->addSql('ALTER TABLE symfony_demo_comment ALTER published_at DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_comment ALTER published_at DROP NOT NULL');
        $this->addSql('ALTER INDEX idx_53ad8f834b89032c RENAME TO idx_16464_idx_53ad8f834b89032c');
        $this->addSql('ALTER INDEX idx_53ad8f83f675f31b RENAME TO idx_16464_idx_53ad8f83f675f31b');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER id TYPE BIGINT');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER id DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER author_id TYPE BIGINT');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER author_id DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER author_id DROP NOT NULL');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER title TYPE TEXT');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER title DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER title DROP NOT NULL');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER slug TYPE TEXT');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER slug DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER slug DROP NOT NULL');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER summary TYPE TEXT');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER summary DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER summary DROP NOT NULL');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER content DROP NOT NULL');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER published_at TYPE TIMESTAMP(0) WITH TIME ZONE');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER published_at DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_post ALTER published_at DROP NOT NULL');
        $this->addSql('ALTER INDEX idx_58a92e65f675f31b RENAME TO idx_16470_idx_58a92e65f675f31b');
        $this->addSql('ALTER TABLE symfony_demo_tag ALTER id TYPE BIGINT');
        $this->addSql('ALTER TABLE symfony_demo_tag ALTER id DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_tag ALTER name TYPE TEXT');
        $this->addSql('ALTER TABLE symfony_demo_tag ALTER name DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_tag ALTER name DROP NOT NULL');
        $this->addSql('ALTER INDEX uniq_4d5855405e237e06 RENAME TO idx_16479_uniq_4d5855405e237e06');
        $this->addSql('ALTER TABLE symfony_demo_post_tag ALTER post_id TYPE BIGINT');
        $this->addSql('ALTER TABLE symfony_demo_post_tag ALTER post_id DROP DEFAULT');
        $this->addSql('ALTER TABLE symfony_demo_post_tag ALTER tag_id TYPE BIGINT');
        $this->addSql('ALTER TABLE symfony_demo_post_tag ALTER tag_id DROP DEFAULT');
        $this->addSql('ALTER INDEX idx_6abc1cc4bad26311 RENAME TO idx_16476_idx_6abc1cc4bad26311');
        $this->addSql('ALTER INDEX idx_6abc1cc44b89032c RENAME TO idx_16476_idx_6abc1cc44b89032c');
    }
}
