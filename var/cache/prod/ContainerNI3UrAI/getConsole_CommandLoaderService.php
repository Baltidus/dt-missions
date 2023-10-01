<?php

namespace ContainerNI3UrAI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_CommandLoaderService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/CommandLoader/CommandLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/CommandLoader/ContainerCommandLoader.php';

        return $container->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService', true],
            'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService', true],
            'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService', true],
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => ['privates', 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand', 'getRunSqlCommandService', true],
            'doctrine.cache_clear_metadata_command' => ['privates', 'doctrine.cache_clear_metadata_command', 'getDoctrine_CacheClearMetadataCommandService', true],
            'doctrine.cache_clear_query_cache_command' => ['privates', 'doctrine.cache_clear_query_cache_command', 'getDoctrine_CacheClearQueryCacheCommandService', true],
            'doctrine.cache_clear_result_command' => ['privates', 'doctrine.cache_clear_result_command', 'getDoctrine_CacheClearResultCommandService', true],
            'doctrine.cache_collection_region_command' => ['privates', 'doctrine.cache_collection_region_command', 'getDoctrine_CacheCollectionRegionCommandService', true],
            'doctrine.mapping_convert_command' => ['privates', 'doctrine.mapping_convert_command', 'getDoctrine_MappingConvertCommandService', true],
            'doctrine.schema_create_command' => ['privates', 'doctrine.schema_create_command', 'getDoctrine_SchemaCreateCommandService', true],
            'doctrine.schema_drop_command' => ['privates', 'doctrine.schema_drop_command', 'getDoctrine_SchemaDropCommandService', true],
            'doctrine.ensure_production_settings_command' => ['privates', 'doctrine.ensure_production_settings_command', 'getDoctrine_EnsureProductionSettingsCommandService', true],
            'doctrine.clear_entity_region_command' => ['privates', 'doctrine.clear_entity_region_command', 'getDoctrine_ClearEntityRegionCommandService', true],
            'doctrine.mapping_info_command' => ['privates', 'doctrine.mapping_info_command', 'getDoctrine_MappingInfoCommandService', true],
            'doctrine.clear_query_region_command' => ['privates', 'doctrine.clear_query_region_command', 'getDoctrine_ClearQueryRegionCommandService', true],
            'doctrine.query_dql_command' => ['privates', 'doctrine.query_dql_command', 'getDoctrine_QueryDqlCommandService', true],
            'doctrine.schema_update_command' => ['privates', 'doctrine.schema_update_command', 'getDoctrine_SchemaUpdateCommandService', true],
            'doctrine.schema_validate_command' => ['privates', 'doctrine.schema_validate_command', 'getDoctrine_SchemaValidateCommandService', true],
            'doctrine.mapping_import_command' => ['privates', 'doctrine.mapping_import_command', 'getDoctrine_MappingImportCommandService', true],
            'console.command.about' => ['privates', '.console.command.about.lazy', 'get_Console_Command_About_LazyService', true],
            'console.command.assets_install' => ['privates', '.console.command.assets_install.lazy', 'get_Console_Command_AssetsInstall_LazyService', true],
            'console.command.cache_clear' => ['privates', '.console.command.cache_clear.lazy', 'get_Console_Command_CacheClear_LazyService', true],
            'console.command.cache_pool_clear' => ['privates', '.console.command.cache_pool_clear.lazy', 'get_Console_Command_CachePoolClear_LazyService', true],
            'console.command.cache_pool_prune' => ['privates', '.console.command.cache_pool_prune.lazy', 'get_Console_Command_CachePoolPrune_LazyService', true],
            'console.command.cache_pool_delete' => ['privates', '.console.command.cache_pool_delete.lazy', 'get_Console_Command_CachePoolDelete_LazyService', true],
            'console.command.cache_pool_list' => ['privates', '.console.command.cache_pool_list.lazy', 'get_Console_Command_CachePoolList_LazyService', true],
            'console.command.cache_warmup' => ['privates', '.console.command.cache_warmup.lazy', 'get_Console_Command_CacheWarmup_LazyService', true],
            'console.command.config_debug' => ['privates', '.console.command.config_debug.lazy', 'get_Console_Command_ConfigDebug_LazyService', true],
            'console.command.config_dump_reference' => ['privates', '.console.command.config_dump_reference.lazy', 'get_Console_Command_ConfigDumpReference_LazyService', true],
            'console.command.container_debug' => ['privates', '.console.command.container_debug.lazy', 'get_Console_Command_ContainerDebug_LazyService', true],
            'console.command.container_lint' => ['privates', '.console.command.container_lint.lazy', 'get_Console_Command_ContainerLint_LazyService', true],
            'console.command.debug_autowiring' => ['privates', '.console.command.debug_autowiring.lazy', 'get_Console_Command_DebugAutowiring_LazyService', true],
            'console.command.dotenv_debug' => ['privates', '.console.command.dotenv_debug.lazy', 'get_Console_Command_DotenvDebug_LazyService', true],
            'console.command.event_dispatcher_debug' => ['privates', '.console.command.event_dispatcher_debug.lazy', 'get_Console_Command_EventDispatcherDebug_LazyService', true],
            'console.command.router_debug' => ['privates', '.console.command.router_debug.lazy', 'get_Console_Command_RouterDebug_LazyService', true],
            'console.command.router_match' => ['privates', '.console.command.router_match.lazy', 'get_Console_Command_RouterMatch_LazyService', true],
            'console.command.translation_debug' => ['privates', '.console.command.translation_debug.lazy', 'get_Console_Command_TranslationDebug_LazyService', true],
            'console.command.translation_extract' => ['privates', '.console.command.translation_extract.lazy', 'get_Console_Command_TranslationExtract_LazyService', true],
            'console.command.translation_pull' => ['privates', '.console.command.translation_pull.lazy', 'get_Console_Command_TranslationPull_LazyService', true],
            'console.command.translation_push' => ['privates', '.console.command.translation_push.lazy', 'get_Console_Command_TranslationPush_LazyService', true],
            'console.command.xliff_lint' => ['privates', '.console.command.xliff_lint.lazy', 'get_Console_Command_XliffLint_LazyService', true],
            'console.command.yaml_lint' => ['privates', '.console.command.yaml_lint.lazy', 'get_Console_Command_YamlLint_LazyService', true],
            'console.command.secrets_set' => ['privates', '.console.command.secrets_set.lazy', 'get_Console_Command_SecretsSet_LazyService', true],
            'console.command.secrets_remove' => ['privates', '.console.command.secrets_remove.lazy', 'get_Console_Command_SecretsRemove_LazyService', true],
            'console.command.secrets_generate_key' => ['privates', '.console.command.secrets_generate_key.lazy', 'get_Console_Command_SecretsGenerateKey_LazyService', true],
            'console.command.secrets_list' => ['privates', '.console.command.secrets_list.lazy', 'get_Console_Command_SecretsList_LazyService', true],
            'console.command.secrets_decrypt_to_local' => ['privates', '.console.command.secrets_decrypt_to_local.lazy', 'get_Console_Command_SecretsDecryptToLocal_LazyService', true],
            'console.command.secrets_encrypt_from_local' => ['privates', '.console.command.secrets_encrypt_from_local.lazy', 'get_Console_Command_SecretsEncryptFromLocal_LazyService', true],
            'fos_http_cache.command.invalidate_path' => ['privates', 'fos_http_cache.command.invalidate_path', 'getFosHttpCache_Command_InvalidatePathService', true],
            'fos_http_cache.command.invalidate_regex' => ['privates', 'fos_http_cache.command.invalidate_regex', 'getFosHttpCache_Command_InvalidateRegexService', true],
            'fos_http_cache.command.refresh_path' => ['privates', 'fos_http_cache.command.refresh_path', 'getFosHttpCache_Command_RefreshPathService', true],
            'fos_http_cache.command.clear' => ['privates', 'fos_http_cache.command.clear', 'getFosHttpCache_Command_ClearService', true],
            'fos_http_cache.command.invalidate_tag' => ['privates', 'fos_http_cache.command.invalidate_tag', 'getFosHttpCache_Command_InvalidateTagService', true],
            'twig.command.debug' => ['privates', '.twig.command.debug.lazy', 'get_Twig_Command_Debug_LazyService', true],
            'twig.command.lint' => ['privates', '.twig.command.lint.lazy', 'get_Twig_Command_Lint_LazyService', true],
            'security.command.debug_firewall' => ['privates', '.security.command.debug_firewall.lazy', 'get_Security_Command_DebugFirewall_LazyService', true],
            'security.command.user_password_encoder' => ['privates', '.security.command.user_password_encoder.lazy', 'get_Security_Command_UserPasswordEncoder_LazyService', true],
            'security.command.user_password_hash' => ['privates', '.security.command.user_password_hash.lazy', 'get_Security_Command_UserPasswordHash_LazyService', true],
            'contao.command.automator' => ['privates', '.contao.command.automator.lazy', 'get_Contao_Command_Automator_LazyService', true],
            'contao.command.backup_create' => ['privates', '.contao.command.backup_create.lazy', 'get_Contao_Command_BackupCreate_LazyService', true],
            'contao.command.backup_list' => ['privates', '.contao.command.backup_list.lazy', 'get_Contao_Command_BackupList_LazyService', true],
            'contao.command.backup_restore' => ['privates', '.contao.command.backup_restore.lazy', 'get_Contao_Command_BackupRestore_LazyService', true],
            'contao.command.backup_stream_content' => ['privates', 'contao.command.backup_stream_content', 'getContao_Command_BackupStreamContentService', true],
            'contao.command.crawl' => ['privates', '.contao.command.crawl.lazy', 'get_Contao_Command_Crawl_LazyService', true],
            'contao.command.cron' => ['privates', '.contao.command.cron.lazy', 'get_Contao_Command_Cron_LazyService', true],
            'contao.command.debug_dca' => ['privates', '.contao.command.debug_dca.lazy', 'get_Contao_Command_DebugDca_LazyService', true],
            'contao.command.debug_fragments' => ['privates', '.contao.command.debug_fragments.lazy', 'get_Contao_Command_DebugFragments_LazyService', true],
            'contao.command.debug_pages' => ['privates', '.contao.command.debug_pages.lazy', 'get_Contao_Command_DebugPages_LazyService', true],
            'contao.command.debug_twig' => ['privates', '.contao.command.debug_twig.lazy', 'get_Contao_Command_DebugTwig_LazyService', true],
            'contao.command.filesync' => ['privates', '.contao.command.filesync.lazy', 'get_Contao_Command_Filesync_LazyService', true],
            'contao.command.install' => ['privates', '.contao.command.install.lazy', 'get_Contao_Command_Install_LazyService', true],
            'contao.command.migrate' => ['privates', '.contao.command.migrate.lazy', 'get_Contao_Command_Migrate_LazyService', true],
            'contao.command.resize_images' => ['privates', '.contao.command.resize_images.lazy', 'get_Contao_Command_ResizeImages_LazyService', true],
            'contao.command.symlinks' => ['privates', '.contao.command.symlinks.lazy', 'get_Contao_Command_Symlinks_LazyService', true],
            'contao.command.user_create' => ['privates', '.contao.command.user_create.lazy', 'get_Contao_Command_UserCreate_LazyService', true],
            'contao.command.user_list' => ['privates', '.contao.command.user_list.lazy', 'get_Contao_Command_UserList_LazyService', true],
            'contao.command.user_password' => ['privates', '.contao.command.user_password.lazy', 'get_Contao_Command_UserPassword_LazyService', true],
            'contao.command.version' => ['privates', '.contao.command.version.lazy', 'get_Contao_Command_Version_LazyService', true],
            'contao_manager.command.debug_plugins' => ['privates', '.contao_manager.command.debug_plugins.lazy', 'get_ContaoManager_Command_DebugPlugins_LazyService', true],
            'contao_manager.command.install_web_dir' => ['privates', '.contao_manager.command.install_web_dir.lazy', 'get_ContaoManager_Command_InstallWebDir_LazyService', true],
            'contao_manager.command.maintenance_mode' => ['privates', '.contao_manager.command.maintenance_mode.lazy', 'get_ContaoManager_Command_MaintenanceMode_LazyService', true],
            'contao_manager.command.setup' => ['privates', '.contao_manager.command.setup.lazy', 'get_ContaoManager_Command_Setup_LazyService', true],
            'contao_installation.command.lock' => ['privates', '.contao_installation.command.lock.lazy', 'get_ContaoInstallation_Command_Lock_LazyService', true],
            'contao_installation.command.unlock' => ['privates', '.contao_installation.command.unlock.lazy', 'get_ContaoInstallation_Command_Unlock_LazyService', true],
        ], [
            'doctrine.database_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand',
            'doctrine.database_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand',
            'doctrine.query_sql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand',
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand',
            'doctrine.cache_clear_metadata_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\MetadataCommand',
            'doctrine.cache_clear_query_cache_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\QueryCommand',
            'doctrine.cache_clear_result_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\ResultCommand',
            'doctrine.cache_collection_region_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\CollectionRegionCommand',
            'doctrine.mapping_convert_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ConvertMappingCommand',
            'doctrine.schema_create_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\CreateCommand',
            'doctrine.schema_drop_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\DropCommand',
            'doctrine.ensure_production_settings_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\EnsureProductionSettingsCommand',
            'doctrine.clear_entity_region_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\EntityRegionCommand',
            'doctrine.mapping_info_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\InfoCommand',
            'doctrine.clear_query_region_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\QueryRegionCommand',
            'doctrine.query_dql_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\RunDqlCommand',
            'doctrine.schema_update_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\UpdateCommand',
            'doctrine.schema_validate_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ValidateSchemaCommand',
            'doctrine.mapping_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\ImportMappingDoctrineCommand',
            'console.command.about' => '?',
            'console.command.assets_install' => '?',
            'console.command.cache_clear' => '?',
            'console.command.cache_pool_clear' => '?',
            'console.command.cache_pool_prune' => '?',
            'console.command.cache_pool_delete' => '?',
            'console.command.cache_pool_list' => '?',
            'console.command.cache_warmup' => '?',
            'console.command.config_debug' => '?',
            'console.command.config_dump_reference' => '?',
            'console.command.container_debug' => '?',
            'console.command.container_lint' => '?',
            'console.command.debug_autowiring' => '?',
            'console.command.dotenv_debug' => '?',
            'console.command.event_dispatcher_debug' => '?',
            'console.command.router_debug' => '?',
            'console.command.router_match' => '?',
            'console.command.translation_debug' => '?',
            'console.command.translation_extract' => '?',
            'console.command.translation_pull' => '?',
            'console.command.translation_push' => '?',
            'console.command.xliff_lint' => '?',
            'console.command.yaml_lint' => '?',
            'console.command.secrets_set' => '?',
            'console.command.secrets_remove' => '?',
            'console.command.secrets_generate_key' => '?',
            'console.command.secrets_list' => '?',
            'console.command.secrets_decrypt_to_local' => '?',
            'console.command.secrets_encrypt_from_local' => '?',
            'fos_http_cache.command.invalidate_path' => 'FOS\\HttpCacheBundle\\Command\\InvalidatePathCommand',
            'fos_http_cache.command.invalidate_regex' => 'FOS\\HttpCacheBundle\\Command\\InvalidateRegexCommand',
            'fos_http_cache.command.refresh_path' => 'FOS\\HttpCacheBundle\\Command\\RefreshPathCommand',
            'fos_http_cache.command.clear' => 'FOS\\HttpCacheBundle\\Command\\ClearCommand',
            'fos_http_cache.command.invalidate_tag' => 'FOS\\HttpCacheBundle\\Command\\InvalidateTagCommand',
            'twig.command.debug' => '?',
            'twig.command.lint' => '?',
            'security.command.debug_firewall' => '?',
            'security.command.user_password_encoder' => '?',
            'security.command.user_password_hash' => '?',
            'contao.command.automator' => '?',
            'contao.command.backup_create' => '?',
            'contao.command.backup_list' => '?',
            'contao.command.backup_restore' => '?',
            'contao.command.backup_stream_content' => 'Contao\\CoreBundle\\Command\\Backup\\BackupStreamContentCommand',
            'contao.command.crawl' => '?',
            'contao.command.cron' => '?',
            'contao.command.debug_dca' => '?',
            'contao.command.debug_fragments' => '?',
            'contao.command.debug_pages' => '?',
            'contao.command.debug_twig' => '?',
            'contao.command.filesync' => '?',
            'contao.command.install' => '?',
            'contao.command.migrate' => '?',
            'contao.command.resize_images' => '?',
            'contao.command.symlinks' => '?',
            'contao.command.user_create' => '?',
            'contao.command.user_list' => '?',
            'contao.command.user_password' => '?',
            'contao.command.version' => '?',
            'contao_manager.command.debug_plugins' => '?',
            'contao_manager.command.install_web_dir' => '?',
            'contao_manager.command.maintenance_mode' => '?',
            'contao_manager.command.setup' => '?',
            'contao_installation.command.lock' => '?',
            'contao_installation.command.unlock' => '?',
        ]), ['doctrine:database:create' => 'doctrine.database_create_command', 'doctrine:database:drop' => 'doctrine.database_drop_command', 'doctrine:query:sql' => 'doctrine.query_sql_command', 'dbal:run-sql' => 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand', 'doctrine:cache:clear-metadata' => 'doctrine.cache_clear_metadata_command', 'doctrine:cache:clear-query' => 'doctrine.cache_clear_query_cache_command', 'doctrine:cache:clear-result' => 'doctrine.cache_clear_result_command', 'doctrine:cache:clear-collection-region' => 'doctrine.cache_collection_region_command', 'doctrine:mapping:convert' => 'doctrine.mapping_convert_command', 'doctrine:schema:create' => 'doctrine.schema_create_command', 'doctrine:schema:drop' => 'doctrine.schema_drop_command', 'doctrine:ensure-production-settings' => 'doctrine.ensure_production_settings_command', 'doctrine:cache:clear-entity-region' => 'doctrine.clear_entity_region_command', 'doctrine:mapping:info' => 'doctrine.mapping_info_command', 'doctrine:cache:clear-query-region' => 'doctrine.clear_query_region_command', 'doctrine:query:dql' => 'doctrine.query_dql_command', 'doctrine:schema:update' => 'doctrine.schema_update_command', 'doctrine:schema:validate' => 'doctrine.schema_validate_command', 'doctrine:mapping:import' => 'doctrine.mapping_import_command', 'about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:dotenv' => 'console.command.dotenv_debug', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'debug:translation' => 'console.command.translation_debug', 'translation:extract' => 'console.command.translation_extract', 'translation:update' => 'console.command.translation_extract', 'translation:pull' => 'console.command.translation_pull', 'translation:push' => 'console.command.translation_push', 'lint:xliff' => 'console.command.xliff_lint', 'lint:yaml' => 'console.command.yaml_lint', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local', 'fos:httpcache:invalidate:path' => 'fos_http_cache.command.invalidate_path', 'fos:httpcache:invalidate:regex' => 'fos_http_cache.command.invalidate_regex', 'fos:httpcache:refresh:path' => 'fos_http_cache.command.refresh_path', 'fos:httpcache:clear' => 'fos_http_cache.command.clear', 'fos:httpcache:invalidate:tag' => 'fos_http_cache.command.invalidate_tag', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint', 'debug:firewall' => 'security.command.debug_firewall', 'security:encode-password' => 'security.command.user_password_encoder', 'security:hash-password' => 'security.command.user_password_hash', 'contao:automator' => 'contao.command.automator', 'contao:backup:create' => 'contao.command.backup_create', 'contao:backup:list' => 'contao.command.backup_list', 'contao:backup:restore' => 'contao.command.backup_restore', 'contao:backup:stream-content' => 'contao.command.backup_stream_content', 'contao:crawl' => 'contao.command.crawl', 'contao:cron' => 'contao.command.cron', 'debug:dca' => 'contao.command.debug_dca', 'debug:fragments' => 'contao.command.debug_fragments', 'debug:pages' => 'contao.command.debug_pages', 'debug:contao-twig' => 'contao.command.debug_twig', 'contao:filesync' => 'contao.command.filesync', 'contao:install' => 'contao.command.install', 'contao:migrate' => 'contao.command.migrate', 'contao:resize-images' => 'contao.command.resize_images', 'contao:symlinks' => 'contao.command.symlinks', 'contao:user:create' => 'contao.command.user_create', 'contao:user:list' => 'contao.command.user_list', 'contao:user:password' => 'contao.command.user_password', 'contao:version' => 'contao.command.version', 'debug:plugins' => 'contao_manager.command.debug_plugins', 'contao:install-web-dir' => 'contao_manager.command.install_web_dir', 'contao:maintenance-mode' => 'contao_manager.command.maintenance_mode', 'contao:setup' => 'contao_manager.command.setup', 'contao:install:lock' => 'contao_installation.command.lock', 'contao:install:unlock' => 'contao_installation.command.unlock']);
    }
}
