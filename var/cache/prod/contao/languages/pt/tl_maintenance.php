<?php

// vendor/contao/core-bundle/src/Resources/contao/languages/pt/tl_maintenance.xlf
$GLOBALS['TL_LANG']['tl_maintenance']['cacheTables'][0] = 'Apagar dados';
$GLOBALS['TL_LANG']['tl_maintenance']['cacheTables'][1] = 'Selecione os dados que pretende remover ou reconstruir.';
$GLOBALS['TL_LANG']['tl_maintenance']['job'] = 'Tarefa';
$GLOBALS['TL_LANG']['tl_maintenance']['description'] = 'Descrição';
$GLOBALS['TL_LANG']['tl_maintenance']['clearCache'] = 'Remover dados';
$GLOBALS['TL_LANG']['tl_maintenance']['cacheCleared'] = 'Dados removidos';
$GLOBALS['TL_LANG']['tl_maintenance']['updateHelp'] = 'Digite o seu %s aqui.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['index'][0] = 'Limpar o índice de pesquisa';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['index'][1] = 'Truncata as tabelas <code>tl_search</code>, <code>tl_search_index</code> e <code>tl_search_term</code>. Depois, é necessário reconstruir o índice de pesquisa (ver acima).';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['undo'][0] = 'Remove a tabela anterior em memória';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['undo'][1] = 'Trunca a tabela <code>tl_undo</code> a qual regista elementos removidos. Esta tarefa permanentemente remove esses registos de elementos.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['versions'][0] = 'Removea tabela de versões';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['versions'][1] = 'Trunca a tabela <code>tl_version</code> a qual contém versões anteriores de registos. Esta tarefa permanentemente remove esse conteúdo.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['log'][0] = 'Limpar o log de sistema';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['log'][1] = 'Trunca a tabela <code>tl_log</code> a qual guarda todos os logs de sistema. Esta tarefa permanentemente remove esses mesmos logs.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['crawl_queue'][0] = 'Remove a lista de espera crawl';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['crawl_queue'][1] = 'Truncata a tabela <code>tl_crawl_queue</code> armazena toda a informação da fila de processos de crawl.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['images'][0] = 'Limpar a cache de imagem';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['images'][1] = 'Remove as imagens geradas automaticamente e depois remove a cache partilhada, para que não existam links para recursos removidos.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['previews'][0] = 'Purificar a cache de pré-visualização';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['previews'][1] = 'Remove as imagens de pré-visualização geradas automaticamente e depois limpa a cache partilhada, pelo que não existem ligações a recursos apagados.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['scripts'][0] = 'Limpar a cache de script';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['scripts'][1] = 'Remove ficheiros <code>.css</code> e <code>.js</code> automaticamente criados, recria as folhas de estilo internas e em seguida remove a cache partilhada.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['pages'][0] = 'Limpar cache partilhada';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['pages'][1] = 'Remove versões em cache de páginas front end.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['temp'][0] = 'Limpa a pasta temporária';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['temp'][1] = 'Remove ficheiros temporários.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['xml'][0] = 'Recriar ficheiros XML';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['xml'][1] = 'Recria os ficheiros XML na pasta <code>partilhada</code> e depois limpa a cache partilhada, pelo que não existem ligações a recursos eliminados.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['symlinks'][0] = 'Recriar symlinks';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['symlinks'][1] = 'Recria os links simbólicos na pasta pública (raiz do documento).';
$GLOBALS['TL_LANG']['tl_maintenance']['crawler'] = 'Crawler';
$GLOBALS['TL_LANG']['tl_maintenance']['startCrawling'] = 'Iniciar crawler';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscribers'][0] = 'Funcionalidades ativadas';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscribers'][1] = 'O crawler analisa todos os URLs que encontrar. Aqui pode decidir o que fazer com esses resultados.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlMember'][0] = 'Membro Font End';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlMember'][1] = 'Iniciar sessão automaticamente num front end member para indexar páginas protegidas.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlWaitToBeFinished'] = 'O crawler está atualmente em processamento. Por favor aguarde que termine para verificar os resultados.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscriberNames']['search-index'] = 'Atualizar o índex de procura';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscriberNames']['broken-link-checker'] = 'Procurar links inválidos';
