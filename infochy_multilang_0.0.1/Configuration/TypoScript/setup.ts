
plugin.tx_infochymultilang_model {
  view {
    templateRootPaths.0 = EXT:infochy_multilang/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_infochymultilang_model.view.templateRootPath}
    partialRootPaths.0 = EXT:infochy_multilang/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_infochymultilang_model.view.partialRootPath}
    layoutRootPaths.0 = EXT:infochy_multilang/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_infochymultilang_model.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_infochymultilang_model.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_infochymultilang._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-infochy-multilang table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-infochy-multilang table th {
        font-weight:bold;
    }

    .tx-infochy-multilang table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
