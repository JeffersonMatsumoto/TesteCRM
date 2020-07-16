<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}


$mod_strings = array(
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => 'Ligações',
    'LBL_MODULE_TITLE' => 'Ligações: Início',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Ligação',
    'LBL_LIST_FORM_TITLE' => 'Listar Ligações',
    'LBL_NEW_FORM_TITLE' => 'Criar Compromisso',
    'LBL_LIST_CLOSE' => 'Fechar',
    'LBL_LIST_SUBJECT' => 'Assunto',
    'LBL_LIST_CONTACT' => 'Contato',
    'LBL_LIST_RELATED_TO' => 'Referente a',
    'LBL_LIST_RELATED_TO_ID' => 'Referente ao ID',
    'LBL_LIST_DATE' => 'Data de Início',
    'LBL_LIST_DIRECTION' => 'Direção',
    'LBL_SUBJECT' => 'Assunto:',
    'LBL_REMINDER' => 'Aviso:',
    'LBL_CONTACT_NAME' => 'Contato:',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_STATUS' => 'Status:',
    'LBL_DIRECTION' => 'Direção:',
    'LBL_DATE' => 'Data de Início:',
    'LBL_DURATION' => 'Duração:',
    'LBL_DURATION_HOURS' => 'Duração (horas):',
    'LBL_DURATION_MINUTES' => 'Duração (minutos):',
    'LBL_HOURS_MINUTES' => '(horas/minutos)',
    'LBL_DATE_TIME' => 'Data e Hora de Início:',
    'LBL_TIME' => 'Hora de Início:',
    'LBL_HOURS_ABBREV' => 'Hrs',
    'LBL_MINSS_ABBREV' => 'Mnts',
    'LNK_NEW_CALL' => 'Registrar Ligação',
    'LNK_NEW_MEETING' => 'Criar Reunião',
    'LNK_CALL_LIST' => 'Ver Ligações',
    'LNK_IMPORT_CALLS' => 'Importar Ligações',
    'ERR_DELETE_RECORD' => 'É necessário um número de registro para excluir a conta.',
    'LBL_INVITEE' => 'Convidados',
    'LBL_RELATED_TO' => 'Referente a:',
    'LNK_NEW_APPOINTMENT' => 'Criar Compromisso',
    'LBL_SCHEDULING_FORM_TITLE' => 'Calendario',
    'LBL_ADD_INVITEE' => 'Adicionar convidados',
    'LBL_NAME' => 'Nome',
    'LBL_FIRST_NAME' => 'Primeiro Nome',
    'LBL_LAST_NAME' => 'Sobrenome',
    'LBL_EMAIL' => 'E-mail',
    'LBL_PHONE' => 'Telefone',
    'LBL_REMINDER_POPUP' => 'Pop-up',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Enviar e-mail para todos',
    'LBL_EMAIL_REMINDER' => 'Alerta de E-mail',
    'LBL_EMAIL_REMINDER_TIME' => 'Alerta de E-mail',
    'LBL_SEND_BUTTON_TITLE' => 'Salvar e Enviar Convites',
    'LBL_SEND_BUTTON_LABEL' => 'Salvar e Enviar Convites',
    'LBL_DATE_END' => 'Data de conclusão',
    'LBL_REMINDER_TIME' => 'Hora do aviso',
    'LBL_EMAIL_REMINDER_SENT' => 'Alerta de E-mail Enviado',
    'LBL_SEARCH_BUTTON' => 'Pesquisar',
    'LBL_ADD_BUTTON' => 'Adicionar',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ligações',
    'LNK_SELECT_ACCOUNT' => 'Seleccionar conta',
    'LNK_NEW_ACCOUNT' => 'Nova conta',
    'LNK_NEW_OPPORTUNITY' => 'Nova Oportunidade',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potenciais',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatos',
    'LBL_USERS_SUBPANEL_TITLE' => 'Usuários',
    'LBL_OUTLOOK_ID' => 'ID do Outlook',
    'LBL_MEMBER_OF' => 'Membro de',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Anotações',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_LIST_MY_CALLS' => 'As Minhas Ligações',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_ASSIGNED_TO_ID' => 'Usuário Atribuído',
    'NOTICE_DURATION_TIME' => 'Tempo de duração deve ser maior que 0',
    'LBL_CALL_INFORMATION' => 'Visão geral', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_REMOVE' => 'Remover',
    'LBL_ACCEPT_STATUS' => 'Status de Aceitação',
    'LBL_ACCEPT_LINK' => 'Aceitar link',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Criar um convite',
    'LBL_CREATE_CONTACT' => 'Criar contato',
    'LBL_CREATE_LEAD' => 'Criar Potencial',
    'LBL_CREATE_AND_ADD' => 'Criar e adicionar',
    'LBL_CANCEL_CREATE_INVITEE' => 'Cancelar',
    'LBL_EMPTY_SEARCH_RESULT' => 'Descuple, nenhum resultado foi achado. Favor criar um convite abaixo.',
    'LBL_NO_ACCESS' => 'Você não tem acesso para criar $module',

    'LBL_REPEAT_TYPE' => 'Repetir Tipo',
    'LBL_REPEAT_INTERVAL' => 'Repetir Intervalo',
    'LBL_REPEAT_DOW' => 'Repetir Dow',
    'LBL_REPEAT_UNTIL' => 'Repetir até',
    'LBL_REPEAT_COUNT' => 'Repetir Contagem',
    'LBL_REPEAT_PARENT_ID' => 'Repetir Parent ID',
    'LBL_RECURRING_SOURCE' => 'Fonte Recorrente',

    'LBL_SYNCED_RECURRING_MSG' => 'Esta ligação foi originada em outro sistema e sincronizada com o SuiteCRM. Para fazer alterações, vá para ao registro original da ligação no outro sistema. As alterações feitas no outro sistema podem ser sincronizadas com esse registro.',

    // for reminders
    'LBL_REMINDERS' => 'Avisos padrão:',
    'LBL_REMINDERS_ACTIONS' => 'Ações:',
    'LBL_REMINDERS_POPUP' => 'Pop-up',
    'LBL_REMINDERS_EMAIL' => 'E-mail convite',
    'LBL_REMINDERS_WHEN' => 'Quando:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Remover lembrete',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Adicionar Todos Convidados',
    'LBL_REMINDERS_ADD_REMINDER' => 'Adicionar lembrete',

    'LBL_RESCHEDULE' => 'Reagendar',
    'LBL_RESCHEDULE_COUNT' => 'Tentativas de Ligação',
    'LBL_RESCHEDULE_DATE' => 'Data',
    'LBL_RESCHEDULE_REASON' => 'Razão',
    'LBL_RESCHEDULE_ERROR1' => 'Por favor, selecione uma data válida',
    'LBL_RESCHEDULE_ERROR2' => 'Por favor, selecione um motivo',
    'LBL_RESCHEDULE_PANEL' => 'Reagendar',
    'LBL_RESCHEDULE_HISTORY' => 'Historico de Tentativa de Ligação',
    'LBL_CANCEL' => 'Cancelar',
    'LBL_SAVE' => 'Salvar',

    'LBL_CALLS_RESCHEDULE' => 'Reagendamento de Ligações',
    'LBL_LIST_STATUS'=>'Status',
    'LBL_LIST_DATE_MODIFIED'=>'Data de Modificação',
    'LBL_LIST_DUE_DATE'=>'Data Limite',
);